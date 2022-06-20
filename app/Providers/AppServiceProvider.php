<?php

namespace App\Providers;

use App\Classes\SMS\KavehNegarSMSSenderFactory;
use App\Services\SendSMS\SMSSender;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            SMSSender::class,KavehNegarSMSSenderFactory::class
        );
    }

    public function boot()
    {
        //
    }
}
