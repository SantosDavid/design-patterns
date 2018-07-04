<?php

namespace Behavioral\TemplateMethod;

class Subtraction extends AbstractClass
{
    private const SUBTRACTION = 4.00;

    protected function add(float $number): float
    {
        return $number;
    }

    protected function subtraction(float $number): float
    {
        return $number - Self::SUBTRACTION;
    }
}
