<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\Contracts\RateContract;

class RateContext
{
    private $rate;

    public function __construct(RateContract $rate)
    {
        $this->rate = $rate;
    }

    public function calculate(float $value) : float
    {
        return $this->rate->calculate($value);
    }
}