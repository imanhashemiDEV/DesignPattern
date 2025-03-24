<?php

namespace App\DesignePatterns\Strategy;

interface SendMessageMethodInterface
{
    public function send($receiver,$message);
}
