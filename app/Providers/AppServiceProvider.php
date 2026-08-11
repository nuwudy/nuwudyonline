<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        \Awcodes\Curator\Facades\Glide::serverConfig([
            'driver' => 'imagick',
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \App\Models\CustomerDocument::observe(\App\Observers\CustomerDocumentObserver::class);
    }
}
