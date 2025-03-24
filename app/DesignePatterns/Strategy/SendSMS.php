<?php

namespace App\DesignePatterns\Strategy;

class SendSMS implements SendMessageMethodInterface
{

    public function send($receiver, $message)
    {
        echo "sms is send";
    }
}
