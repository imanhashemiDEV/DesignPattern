<?php

namespace App\Services\Payment;

class PaymentChecker
{
    public function paymentChecker($type)
    {
        if($type === 'zarinpal'){
            return new PayWithZarinpall();
        }elseif($type ==='mellat'){
             return new PayWithMellat();
        }
     }
}
