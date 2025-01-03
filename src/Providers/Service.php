<?php

namespace Xuhaohao\LaravelModelCache\Providers;

use Xuhaohao\LaravelModelCache\Console\Commands\Clear;
use Xuhaohao\LaravelModelCache\Console\Commands\Publish;
use Xuhaohao\LaravelModelCache\Helper;
use Xuhaohao\LaravelModelCache\ModelCaching;
use Illuminate\Support\ServiceProvider;

class Service extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $configPath = __DIR__ . '/../../config/laravel-model-caching.php';
        $this->mergeConfigFrom($configPath, 'laravel-model-caching');
        $this->commands([
            Clear::class,
            Publish::class,
        ]);
        $this->publishes([
            $configPath => config_path('laravel-model-caching.php'),
        ], "config");
    }

    public function register()
    {
        if (! class_exists('Xuhaohao\LaravelModelCache\EloquentBuilder')) {
            class_alias(
                ModelCaching::builder(),
                'Xuhaohao\LaravelModelCache\EloquentBuilder'
            );
        }

        $this->app->bind("model-cache", Helper::class);
    }
}
