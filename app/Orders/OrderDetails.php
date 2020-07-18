<?php


namespace App\Orders;


use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayInterface;

class OrderDetails
{
    private $pg;
    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->pg = $paymentGateway;

    }

    /**
     * @return PaymentGateway
     */
    public function all()
    {
        $this->pg->setDiscount(500);
        return [
            "name"=>"Vicor",
            "address"=>"123 street"
        ];
    }
}
