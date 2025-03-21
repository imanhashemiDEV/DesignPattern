<?php

namespace App\DesignePatterns\Factory;

class PaymentProcessingFactory
{
    public static function processingPayment($gateway)
    {
//        if($gateway === "zarinpal"){
//           return  new Zarinpal();
//        }elseif($gateway === "mellat"){
//            return  new Mellat();
//        }

        return match ($gateway) {
            'zarinpal'=> new Zarinpal(),
            'mellat'=> new Mellat(),
            default => throw new \InvalidArgumentException('invalid gateway')
        };
    }
}
