<?php

use Behavioral\Strategy\RateContext;
use Behavioral\Strategy\RateOneStrategy;
use Behavioral\Strategy\RateTwoStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testStrategyOne()
    {
        $context = new RateContext(new RateOneStrategy());

        $this->assertEquals($context->calculate(2.00), 2.00);
    }

    public function testStrategyTwo()
    {
        $context = new RateContext(new RateTwoStrategy());

        $this->assertEquals($context->calculate(2.00), 4.00);
    }
}
