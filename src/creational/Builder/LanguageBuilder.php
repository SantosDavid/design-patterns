<?php

namespace Creational\Builder;

abstract class LanguageBuilder
{
    protected $language;

    public function __construct()
    {
        $this->language = new LanguageProgrammingProduct();
    }

    public function getLanguage()
    {
        return $this->language;
    }

    abstract public function buildName();

    abstract public function buildTypes();
}