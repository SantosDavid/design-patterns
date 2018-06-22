<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Contracts\SmartphoneContract;

class GalaxyY implements SmartphoneContract
{
    private const BRAND = 'SAMSUNG';

    public function openCamera(): String
    {
        return 'galaxy Y opened the camera';
    }

    public function getBrand(): String
    {
        return Self::BRAND;
    }
}
