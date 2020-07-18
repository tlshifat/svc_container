<?php

namespace App\Billing;



class  CreditCardPaymentGateway implements PaymentGatewayInterface
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
        $fee = $amount*0.03;
        return [
            "amount"=>$amount-$this->discount-$fee,
            "confirmation_number"=>\Illuminate\Support\Str::random(10),
            "currency"=>$this->currency,
            "discount"=>$this->discount,
            "fee"=>$fee
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
