<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\Contracts\RateContract;

class RateTwoStrategy implements RateContract
{
    private const RATE = 2;

    public function calculate(float $value): float
    {
        return $value * Self::RATE;
    }
}
