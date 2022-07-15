<?php

namespace App\Interfaces\Payment;

use App\Models\Order;

interface PaymentMethodInterface
{
    public function pay(Order $order);
}
