<?php
namespace Piseth\Pos;
use Illuminate\Support\ServiceProvider;

class POSServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'pos');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(
            __DIR__.'/config/pos.php', 'pos'
        );

        $this->publishes([
            __DIR__.'/config/pos.php' => config_path('pos.php'),
        ]);
    }

    public function register()
    {
        
    }
}