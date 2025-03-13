<?php

namespace App\Interfaces;

interface NotificationInterface
{
    public function sendSMS();
    public function sendEmail();
}
