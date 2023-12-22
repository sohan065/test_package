<?php

namespace Sohan065\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'crud');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // $this->publishes([
        //     __DIR__ . '/../resources/views' => resource_path('views/vendor/courier'),
        // ]);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->publishes([
            __DIR__ . '/public' => public_path('sohan065/crud'),
        ], 'public');
    }
}