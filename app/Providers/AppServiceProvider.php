<?php

namespace App\Providers;

use App\Repositories\IntNotificationRepository;
use App\Repositories\NotificationRepository;
use App\Services\IntNotificationService;
use App\Services\NotificationService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IntNotificationRepository::class, NotificationRepository::class);
        $this->app->bind(IntNotificationService::class, NotificationService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Schema::defaultStringLength(191);
    }
}
