<?php

namespace Structural\Adapter;

use Structural\Adapter\Contracts\PaymentAdapterContract;

class PayPalAdapter implements PaymentAdapterContract
{
    private $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function pay(float $value): bool
    {
        return $this->payPal->pay($value);
    }
}
