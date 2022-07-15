<?php

namespace App\Services\paymentService;

use App\Interfaces\Payment\PaymentMethodInterface;
use App\Models\Order;

class Zarinpall implements  PaymentMethodInterface
{
    public function pay(Order $order)
    {

    }
}
