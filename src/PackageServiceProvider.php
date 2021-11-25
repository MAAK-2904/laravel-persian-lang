<?php

namespace MAAK\PersianLang;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/fa' => base_path('resources/lang/fa')
        ]);

    }
}
