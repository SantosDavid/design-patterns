<?php

namespace Structural\Adapter;

class PayPal
{
    public function pay(float $value): bool
    {
        return true;
    }
}
