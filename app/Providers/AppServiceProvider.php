<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_URL')) {
            URL::forceRootUrl($this->app->get('config')->get('app.url'));
            URL::forceScheme(parse_url($this->app->get('config')->get('app.url'), PHP_URL_SCHEME));
        }

        $this->app->get('config')->set('app.version', env('APP_VERSION', 'N/A'));
    }
}
