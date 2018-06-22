<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Contracts\SmartphoneContract;

class MotoX implements SmartphoneContract
{
    private const BRAND = 'MOTOROLA';

    public function openCamera(): String
    {
        return 'moto X opened the camera';
    }

    public function getBrand(): String
    {
        return Self::BRAND;
    }
}
