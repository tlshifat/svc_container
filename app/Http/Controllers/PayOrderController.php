<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayInterface;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    //
    protected function store(OrderDetails $orderDetails,PaymentGatewayInterface $paymentGateway)
    {
        // payment gate way get the instances form App Service provider
        //Payment or credit.
        $orderDetails = $orderDetails->all();
        //$paymentGateway=new PaymentGateway('usd');
        dd($paymentGateway->charge(10000));
    }
}
