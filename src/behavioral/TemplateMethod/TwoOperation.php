<?php

namespace Behavioral\TemplateMethod;

class TwoOperation extends AbstractClass
{
    private const SUBTRACTION = 2.00;
    
    private const DIVISION = 3.00;

    protected function add(float $number): float
    {
        return $number;
    }

    protected function subtraction(float $number): float
    {
        return $number - Self::SUBTRACTION;
    }

    protected function division(float $number): float
    {
        return $number - Self::SUBTRACTION;
    }
}
