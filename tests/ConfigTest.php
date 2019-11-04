<?php

namespace plumthedev\PhpCsFixer\tests;

use PHPUnit_Framework_TestCase as TestCase;
use plumthedev\PhpCsFixer\Config;

class ConfigTest extends TestCase
{
    public $csFixerConfig;

    public function setUp()
    {
        $this->csFixerConfig = new Config();
    }

    public function testIsInstanceOfPhpCsFixerConfig()
    {
        $this->assertInstanceOf('PhpCsFixer\Config', $this->csFixerConfig);
    }

    public function testHasRules()
    {
        $this->assertNotEmpty($this->csFixerConfig->getRules());
    }

    public function testIsRiskyAllowed()
    {
        $this->assertTrue($this->csFixerConfig->getRiskyAllowed());
    }

    public function testHasFinder()
    {
        $this->assertNotNull($this->csFixerConfig->getFinder());
    }

    public function testHasValidFinder()
    {
        $this->assertInstanceOf('plumthedev\PhpCsFixer\Finder', $this->csFixerConfig->getFinder());
    }

    public function testHasValidName()
    {
        $this->assertEquals('yii2-php-cs-fixer-config', $this->csFixerConfig->getName());
    }
}
