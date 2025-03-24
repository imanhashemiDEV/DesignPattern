<?php

namespace App\DesignePatterns\Strategy;

class SendMessageMethodService
{
   private $method;

    public function setSendMethod(SendMessageMethodInterface $method)
    {
          $this->method = $method;
   }

    public function sendMessage($receiver, $message)
    {
        $this->method->send($receiver, $message);
   }
}
