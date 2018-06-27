<?php

namespace Structural\Adapter\Contracts;

use Structural\Adapter\Paypal;

interface PaymentAdapterContract
{
    public function __construct(PayPal $payPal);

    public function pay(float $value): bool;
}
