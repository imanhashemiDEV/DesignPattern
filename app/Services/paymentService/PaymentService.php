<?php

namespace App\Services\paymentService;

use App\Interfaces\Payment\PaymentMethodInterface;
use App\Models\Order;

class PaymentService
{
    /**
     * @var $paymentMethod PaymentMethodInterface
     */
  private $paymentMethod;

    public function setPaymentMethod(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay(Order $order)
    {
        $this->paymentMethod->pay($order);
    }
}
