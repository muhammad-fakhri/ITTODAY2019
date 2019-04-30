<?php

namespace App\Providers;

use App\Tag;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //tidak perlu
        //if(env('REDIRECT_HTTPS')) {
        //    $url->formatScheme('https');
        //}
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //tidak perlu
        //if(env('REDIRECT_HTTPS')) {
          //  $this->app['request']->server->set('HTTPS', true);
        //}
    }
}