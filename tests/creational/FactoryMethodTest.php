<?php

use PHPUnit\Framework\TestCase;
use Creational\FactoryMethod\{SmartphoneFactory, GalaxyY, MotoG, MotoX};

class FactoryMethodTest extends TestCase
{
    private $factory;

    function setUp()
    {
        $this->factory = new SmartphoneFactory();
    }

    public function testCreateGalaxyY()
    {
        $this->assertInstanceOf(GalaxyY::class, $this->factory->create('GalaxyY'));
    }

    public function testCreateMotoG()
    {
        $this->assertInstanceOf(MotoG::class, $this->factory->create('MotoG'));
    }

    public function testCreateMotoX()
    {
        $this->assertInstanceOf(MotoX::class, $this->factory->create('MotoX'));
    }

    public function testCreateException()
    {
        $this->expectException(\Exception::class);
        
        $this->factory->create('Exception');
    }
}