<?php

namespace Uzzaircode\PasswordStrength;

use Illuminate\Support\ServiceProvider;

class PasswordStrengthServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'password-strength');        
    }

    public function register()
    {
        $this->app->singleton(PasswordStrength::class, function () {
            return new PasswordStrength();
        });
        $this->app->alias(PasswordStrength::class, 'password-strength');
        // include __DIR__ . '/asset/web.php';
        // $this->app->make('Uzzaircode\Math\MathController');
        $this->publishes([
            __DIR__ . '/assets' => base_path('public/password-strength'),
            __DIR__ . '/views'  => base_path('resources/views/vendor/password-strength')
        ]);
    }
}