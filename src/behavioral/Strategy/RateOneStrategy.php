<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\Contracts\RateContract;

class RateOneStrategy implements RateContract
{
    private const RATE = 1;

    public function calculate(float $value): float
    {
        return $value * Self::RATE;
    }
}
