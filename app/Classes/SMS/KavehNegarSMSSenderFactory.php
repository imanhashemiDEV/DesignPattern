<?php

namespace App\Classes\SMS;

use App\Interfaces\SendSMS\Sender;
use App\Services\SendSMS\SMSSender;

class KavehNegarSMSSenderFactory extends SMSSender
{
    protected function createSender(): Sender
    {
        return new  KavehNagarSMSSender();
    }
}
