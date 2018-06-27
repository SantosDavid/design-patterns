<?php

use PHPUnit\Framework\TestCase;

use Structural\Adapter\PayPal;
use Structural\Adapter\PayPalAdapter;

class AdapterTest extends TestCase
{
    public function testPayPal()
    {
        $payPal = new PayPal();

        return $this->assertTrue($payPal->pay(10.00));
    }

    public function testPayPalAdapter()
    {
        $payPalAdapter = new PayPalAdapter(new PayPal());

        return $this->assertTrue($payPalAdapter->pay(10.00));
    }
}
