<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CentralServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Загрузка конфигурации из вашего пакета
        $this->mergeConfigFrom(__DIR__.'/../config/database.php', 'database.connections');
    }
}
