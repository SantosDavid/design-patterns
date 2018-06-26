<?php

use PHPUnit\Framework\TestCase;
use Creational\Builder\{LanguageDirector, PHPBuilder, JavaScriptBuilder, LanguageProgrammingProduct as Language};

class BuilderTest extends TestCase
{
    private $director;
    
    public function testCreatePHP()
    {
        $this->director = new LanguageDirector(new PHPBuilder());

        $language = $this->director->build();

        $this->assertInstanceOf(Language::class, $language);
    }

    public function testeCheckPHPName()
    {
        $this->director = new LanguageDirector(new PHPBuilder());

        $language = $this->director->build();

        $this->assertEquals('PHP', $language->name());
    }

    public function testCreateJavaScript()
    {
        $this->director = new LanguageDirector(new JavaScriptBuilder());

        $language = $this->director->build();

        $this->assertInstanceOf(Language::class, $language);
    }

    public function testeCheckJavaScriptName()
    {
        $this->director = new LanguageDirector(new JavaScriptBuilder());

        $language = $this->director->build();

        $this->assertEquals('JavaScript', $language->name());
    }
}