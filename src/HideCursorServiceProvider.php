<?php

namespace Enflow\Dashboard\Tile\HideCursor;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class HideCursorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-hide-cursor'),
        ], 'dashboard-hide-cursor-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-hide-cursor');

        Livewire::component('hide-cursor', HideCursorComponent::class);
    }
}
