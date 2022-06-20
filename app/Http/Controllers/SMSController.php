<?php

namespace App\Http\Controllers;

use App\Classes\SMS\SMS;
use App\Services\SendSMS\SMSSender;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function sendMessage(Request $request, SMSSender $sender)
    {
        return $sender->send(new SMS($request->mobile, $request->message));
    }
}
