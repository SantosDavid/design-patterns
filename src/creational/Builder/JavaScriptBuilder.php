<?php

namespace Creational\Builder;

class JavaScriptBuilder extends LanguageBuilder
{
    private CONST name = 'JavaScript';

    private CONST types = [
        'NAN',
    ];

    public function buildName()
    {
        $this->language->setName(Self::name);
    }

    public function buildTypes()
    {
        $this->language->setTypes(Self::types);
    }
}