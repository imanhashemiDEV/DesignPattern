<?php

namespace App\Http\Controllers\Front;

use App\DesignePatterns\Factory\Mellat;
use App\DesignePatterns\Factory\PaymentProcessingFactory;
use App\DesignePatterns\Factory\Zarinpal;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $gateway = $request->input('gateway');
        PaymentProcessingFactory::checkPayment($gateway)->pay();

        Order::query()->create([
            'gateway'=>$gateway,
            'price'=> $request->get('price'),
        ]);
    }
}
