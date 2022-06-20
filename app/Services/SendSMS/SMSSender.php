<?php

namespace App\Services\SendSMS;

use App\Classes\SMS\SMS;
use App\Interfaces\SendSMS\Sender;

abstract class SMSSender
{
    public function send(SMS $sms)
    {
        $sender = $this->createSender();
        $sender->send($sms);
    }
    abstract protected function createSender():Sender;
}
