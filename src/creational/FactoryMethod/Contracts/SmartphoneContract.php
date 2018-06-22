<?php

namespace Creational\FactoryMethod\Contracts;

interface SmartphoneContract
{
    public function openCamera(): String;

    public function getBrand(): String;
}
