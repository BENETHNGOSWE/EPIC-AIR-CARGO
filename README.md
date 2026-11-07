# Epic Air Cargo — website

Laravel app for Epic Air Cargo, Dar es Salaam. The front-end is a purchased
transport/logistics theme; the previous tenant's text, contact details and
photographs have been removed.

## Before this can go live
1. `TODO@example.com` and `+255 700 000 000` are placeholders (grep for them).
2. Replace `public/frontend/assets/img/logo.png` + `favicon.png` with your own artwork.
3. The demo photographs in `public/frontend/assets/img/` are the template's, not yours
   (theme licence covers one end product and its demo images may not be published).
4. Set `APP_KEY` and `APP_URL` in the environment, then `composer install --no-dev -o`.
5. No database is required: `DB_CONNECTION=sqlite`, `SESSION_DRIVER=file`,
   `CACHE_STORE=file`, `QUEUE_CONNECTION=sync`.

- Assets are emitted root-relative (`/frontend/...`) so no proxy or TLS setup can
  break them; `trustProxies` is set for anything that must be absolute.


## Brand
* Logo: `img/logo.png` (navy/red, for light headers) and `img/logo-white.png` (for the dark footer);
  `img/favicon.png` + `favicon-192.png` + `og-image.jpg` are cut from the same artwork.
* Colours live in `css/brand.css`, which overrides the theme's `:root` variables - `style.css` is
  untouched. Navy `#0a2147` = `--color-primary`/`--color-heading`/`--dark`, red `#85080f` =
  `--color-secondary`; the theme gradient now runs navy -> red. Change brand.css, not style.css.

## Vendor files replaced
* Font Awesome **Pro** 5.15.0 (not licensed) -> Font Awesome **Free** 5.15.4, SIL OFL.
* GSAP **SplitText** (paid Club GreenSock plugin) -> a no-op shim, so the theme's
  `main.js` still runs; the character-reveal intro animation does not.
* `YTPlayer.min.js` is now a no-op shim: the theme's obfuscated `main.js` calls `.YTPlayer()`
  and 56 `.YTP*()` methods, and one missing method aborts the rest of that file. No video is
  configured for this site, so the banner is a static image.
* `main.js` ships obfuscated; it contains no licence check or outbound call, but it
  is unreadable, so treat it as third-party and keep it updated from the theme.
