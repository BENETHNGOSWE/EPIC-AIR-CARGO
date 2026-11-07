# Deploying epicaircargo on the Contabo VPS (Coolify)

One application, Nixpacks, no database service.

1. Coolify -> New resource -> Application, source `BENETHNGOSWE/EPIC-AIR-CARGO`, branch `main`,
   **Build Pack: Nixpacks**. Nixpacks reads `nixpacks.toml` in the repo, including the build phase
   that generates `APP_KEY` and fixes ownership of `storage/`.
2. Ports: expose `8080` (the domain proxy targets what the container listens on; `nixpacks.toml`
   binds nginx to `${PORT}`). If you set a fixed port in Coolify, make it match.
3. Domain: `https://epicaircargo.com`. Keep `Trust Proxies` as it is in code - `bootstrap/app.php`
   already trusts all proxies, which is why assets use root-relative URLs and stay on https.
4. Optional but recommended: add a `APP_KEY` variable in Coolify (generate one with
   `php artisan key:generate --show`). A real environment variable wins over the `.env` file, so
   this makes the deploy independent of anything baked into the image.
5. Deploy.

## If you get "Server Error" (HTTP 500)

The page is deliberately blank because `APP_DEBUG=false`. The real message goes to the container's
standard error, so read the **Runtime / Application logs** in Coolify - not the build logs. With
`LOG_CHANNEL=stderr` (set in `.env.example`) the exception is printed there.

Open the container's Shell tab in Coolify and run these; each line is safe to repeat:

```bash
tail -c 4000 storage/logs/laravel.log          # if it exists, the error is in here
php artisan about                               # proves boot + which env/ drivers are live
php artisan config:clear && php artisan view:clear
chown -R www-data:www-data storage bootstrap/cache database
chmod -R ug+rwx storage bootstrap/cache database
test -f database/database.sqlite || touch database/database.sqlite
grep -q '^APP_KEY=base64:' .env || php artisan key:generate --force
```

Then reload the site. If it is still 500, paste the last 20 lines of the runtime log - with those
commands run, the cause is always in there.

| Symptom | Cause | Fix |
|---|---|---|
| `No application encryption key has been specified` | no `APP_KEY` | `php artisan key:generate --force` |
| `Failed to open stream: Permission denied` in `storage/...` | wrong owner after a build | the `chown`/`chmod` lines above |
| `.env` values change but nothing happens | stale config cache | `php artisan config:clear` (then avoid `config:cache` unless every value is in the image) |
| Assets blocked as mixed content | app thinks it is http | keep `trustProxies(at: '*')` in `bootstrap/app.php` |
| Migration step fails | missing sqlite file | `touch database/database.sqlite` (the app itself uses no DB) |

## Changing the site

Edit on the deployment box or in this repo, then:

```bash
git add -A && git commit -m "what changed" && git push
```

and Deploy in Coolify. To update a manual (non-Coolify) install:

```bash
cd /var/www/epicair && git pull && composer install --no-dev -o && php artisan view:cache
```
