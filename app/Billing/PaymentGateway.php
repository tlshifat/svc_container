<?php

namespace App\Billing;



class  PaymentGateway implements PaymentGatewayInterface
{
    private $currency;
    private $discount;
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount=0;
    }

    public function charge($amount){
        //charge the bank

        return [
            "amount"=>$amount-$this->discount,
            "confirmation_number"=>\Illuminate\Support\Str::random(10),
            "currency"=>$this->currency,
            "discount"=>$this->discount
        ];
    }

    /**
     * @return mixed
     */
    public function setDiscount($amount)
    {
        $this->discount=$amount;
    }
}
