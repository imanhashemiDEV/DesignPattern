<?php

namespace App\DesignePatterns\Strategy;

class SendEmail implements SendMessageMethodInterface
{

    public function send($receiver, $message)
    {
        echo "email is send";
    }
}
