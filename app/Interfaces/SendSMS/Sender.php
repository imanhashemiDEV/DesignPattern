<?php

namespace App\Interfaces\SendSMS;

use App\Classes\SMS\SMS;

interface Sender
{
    public function send(SMS $sms);
}
