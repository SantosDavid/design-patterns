<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Contracts\SmartphoneContract;

class MotoG implements SmartphoneContract
{
    private const BRAND = 'MOTOROLA';

    public function openCamera(): String
    {
        return 'moto G opened the camera';
    }

    public function getBrand(): String
    {
        return Self::BRAND;
    }
}
