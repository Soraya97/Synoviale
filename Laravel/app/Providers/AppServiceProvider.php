<?php

namespace App\Providers;

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

        Schema::defaultStringLength(191);

        Blade::if('user', function () {
            return Session::get('user');
        });

        Blade::if('guest', function () {
            return !Session::get('user');
        });

        Blade::if('organizer', function () {
            return Session::get('organizer');
        });

        Blade::if('client', function () {
            return Session::get('client');
        });

        Blade::if('store', function () {
            return Session::get('store');
        });

        Blade::if('employee', function () {
            return Session::get('employee');
        });

        Blade::if('contact', function () {
            return Session::get('contact');
        });
    }
}
