<?php
/**
 * Yii2 PHP CS Fixer Config
 *
 * @author Kacper Pruszynski (plumthedev)
 * @link https://github.com/plumthedev/yii2-php-cs-fixer-config
 * @copyright Copyright (c) 2019 - 2019 plumthedev
 * @license https://github.com/plumthedev/yii2-php-cs-fixer-config/blob/master/LICENSE
 * @version 1.0.1
 */

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

    public function testIsInstanceOfYiiCsFixerConfig()
    {
        $this->assertInstanceOf('yii\cs\YiiConfig', $this->csFixerConfig);
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
