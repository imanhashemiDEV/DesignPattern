<?php

namespace App\Classes\SMS;

use App\Interfaces\SendSMS\Sender;

class KavehNagarSMSSender implements Sender
{

    public function send(SMS $sms)
    {
        echo ($sms->getMobile() . ' ' . $sms->getMessage());
    }
}
