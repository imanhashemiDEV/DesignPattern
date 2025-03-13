<?php

namespace App\Services\Notification;

class SMSNotification extends NotificationSender
{
    public function sendNotification()
    {
        // send sms
    }
}

$sms = new SMSNotification();
$sms->sendNotification(); // send sms
