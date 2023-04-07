<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        Password::defaults(function () {
            Password::min(8)
                ->letters()
                ->numbers();
        });

        // ownerから始まるURL
        if (request()->is('owner*')) {
            config(['session.cookie' => config('session.cookie_owner')]);
        }

        // adminから始まるURL
        if (request()->is('admin*')) {
            config(['session.cookie' => config('session.cookie_owner')]);
        }
        
    }
}
