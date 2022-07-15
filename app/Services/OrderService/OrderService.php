<?php

namespace App\Services\OrderService;

use App\Models\Order;
use Illuminate\Support\Facades\Request;

class OrderService
{
    public $couponService;
    public $quantityservice;

    /**
     * @param $couponService
     * @param $quantityservice
     */
    public function __construct( CouponService $couponService, QuantityService $quantityservice)
    {
        $this->couponService = $couponService;
        $this->quantityservice = $quantityservice;
    }


    public function registerOrder(Request $request)
    {
        // check quantity
         $resultQuantity= $this->quantityservice->checkQuantity($request->product);
        // check coupon
        $resultCoupon= $this->couponService->applyCoupon($request->product, $request->code);
        // register order
        $order = Order::query()->create();
    }
}
