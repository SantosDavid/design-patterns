<?php

namespace Creational\Builder;

class LanguageDirector
{
    private $language;

    public function __construct(LanguageBuilder $language)
    {
        $this->language = $language;
    }

    public function build()
    {
        $this->language->buildName();
        $this->language->buildTypes();

        return $this->language->getLanguage();
    }
}