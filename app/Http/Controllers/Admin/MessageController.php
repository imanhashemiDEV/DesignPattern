<?php

namespace App\Http\Controllers\Admin;

use App\DesignePatterns\Strategy\SendEmail;
use App\DesignePatterns\Strategy\SendMessageMethodService;
use App\DesignePatterns\Strategy\SendSMS;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
      $messageService = new SendMessageMethodService();
      $messageService->setSendMethod(new SendSMS());
      $messageService->sendMessage($request->receiver, $request->message);
    }
}
