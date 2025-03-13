<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\Payment\PaymentChecker;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {

        $type = $request->input("type");

        // wrong way
        //  $payment = new Payment();//
        //   if($type === 'zarinpal'){
       //      $payment->payWithZarinpal();
       //    }elseif($type ==='mellat'){
       //      $payment->payWithMellat();
       //    }

        // good way
          $payment =  new paymentChecker();
          $payment->paymentChecker($type)->pay();

    }
}
