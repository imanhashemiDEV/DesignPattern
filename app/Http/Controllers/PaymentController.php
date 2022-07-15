<?php

namespace App\Http\Controllers;

use App\Interfaces\Payment\PaymentMethodInterface;
use App\Models\Order;
use App\Services\paymentService\PaymentService;
use App\Services\paymentService\Zarinpall;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function pay()
    {
        $order = new Order();

        $paymentsevice = new PaymentService();
        $paymentsevice->setPaymentMethod(new Zarinpall());
        $paymentsevice->pay($order);
    }
}
