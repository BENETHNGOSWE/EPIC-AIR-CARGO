<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Serve every asset by path, not by host. asset() otherwise builds
        // http://<Host>/... from the request, which a TLS-terminating proxy (nginx on the
        // VPS, or any preview proxy) turns into blocked mixed content: the page loads but
        // CSS, JS and images all die. Root-relative URLs work on http, https and any host.
        $this->app['config']->set('app.asset_url', '/');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
