<?php

namespace App\Services\paymentService;

use App\Interfaces\Payment\PaymentMethodInterface;
use App\Models\Order;

class Mellat implements  PaymentMethodInterface
{
    public function doPayment(Order $order)
    {

    }
}
