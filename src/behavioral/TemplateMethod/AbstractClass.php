<?php

namespace Behavioral\TemplateMethod;

abstract class AbstractClass
{
    private const NUMBER = 2.0;

    abstract protected function add(float $number): float;

    abstract protected function subtraction(float $number): float;

    protected function multiply(float $number): float
    {
        return Self::NUMBER * abs($number);
    }

    protected function division(float $number): float
    {
        return $number;
    }

    public function calculate($number): float
    {
        $number = $this->add($number);
        $number = $this->subtraction($number);
        $number = $this->multiply($number);
        $number = $this->division($number);

        return $number;
    }
}
