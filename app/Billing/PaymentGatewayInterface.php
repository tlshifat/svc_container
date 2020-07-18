<?php

namespace App\Billing;

interface PaymentGatewayInterface
{
    public function charge($amount);

    /**
     * @return mixed
     */
    public function setDiscount($amount);
}
