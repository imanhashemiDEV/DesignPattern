<?php

namespace App\Http\Controllers\Front;

use App\DesignePatterns\Builder\PayPriceCalculatorService;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function shipping(Cart $cart,PayPriceCalculatorService $payPriceCalculatorService)
    {
//        $payPriceCalculatorService = new PayPriceCalculatorService(2000,10,2,5);
//        $payPrice = $payPriceCalculatorService->catculatePayPrice();

       // $payPriceCalculatorService = new PayPriceCalculatorService();
        $payPrice = $payPriceCalculatorService->setPrice($cart->price)->setCount(2)
                    ->setDiscount(10)->setTax(5)->catculatePayPrice();
    }
}
