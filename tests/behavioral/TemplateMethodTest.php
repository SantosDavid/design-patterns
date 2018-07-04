<?php

use Behavioral\TemplateMethod\{Subtraction, TwoOperation};
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testClassSubtraction()
    {
        $subtraction = new Subtraction();

        $this->assertEquals($subtraction->calculate(5.0), 2.00);
    }

    public function testClassTwoOperation()
    {
        $subtraction = new TwoOperation();

        $this->assertEquals($subtraction->calculate(5.0), 4.00);
    }
}
