<?php

namespace App\Providers;

use App\Interfaces\hotel\RoomTypesInterface;
use App\Repositories\hotel\RoomTypesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RoomTypesInterface::class,RoomTypesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
