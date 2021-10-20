<?php

namespace App\Providers;

use EloquentUserRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use UserRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->bind(
            UserRepository::class,
            EloquentUserRepository::class

        );
    }
}
