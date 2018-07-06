<?php

namespace Behavioral\Strategy\Contracts;

interface RateContract
{
    public function calculate(float $value) : float;
}