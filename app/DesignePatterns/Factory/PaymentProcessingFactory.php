<?php

namespace App\DesignePatterns\Factory;

class PaymentProcessingFactory
{
    public static function checkPayment($gateway)
    {
        if($gateway === "zarinpal"){
            return new Zarinpal();
        }elseif($gateway === "mellat"){
            return new Mellat();
        }
    }
}
