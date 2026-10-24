<?php

namespace App\Providers;

use Iluminate\Support\Facades\data;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') ==='production'){
            URL::forcescheme('https');
        }
        //
        Gate::define("viewApiDocs",function($user = null){
            return true;
        });
    }
}
