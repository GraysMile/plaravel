<?php

namespace Gray;

use Illuminate\Support\ServiceProvider;

class PlaravelTestProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/plaravel.php' => config_path('plaravel.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function register()
    {
        $this->app->singleton('plaravel', function () {
            return new PlaravelTestService();
        });
    }
}
