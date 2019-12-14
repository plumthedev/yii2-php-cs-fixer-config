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
use plumthedev\PhpCsFixer\Finder;
use ReflectionClass;
use yii\base\InvalidArgumentException;

class FinderTest extends TestCase
{
    public $csFixerFinder;

    public function setUp()
    {
        $this->csFixerFinder = new Finder();
    }

    public function testIsInstanceOfPhpCsFixerFinder()
    {
        $this->assertInstanceOf('PhpCsFixer\Finder', $this->csFixerFinder);
    }

    public function testIsExcludingDirs()
    {
        $this->assertNotEmpty($this->csFixerFinder->yiiAppExclude);
    }

    public function testIsExcludingYiiAppBasicDirs()
    {
        $getYiiAppBasicExcludeMethod = self::getMethod('getYiiAppBasicExclude');
        $yiiAppBasicExclude = $getYiiAppBasicExcludeMethod->invoke($this->csFixerFinder);
        foreach ($yiiAppBasicExclude as $exclude) {
            $this->assertContains($exclude, $this->csFixerFinder->getYiiAppExclude());
        }
    }

    public function testIsExcludingYiiAppAdvancedDirs()
    {
        $getYiiAppAdvancedExcludeMethod = self::getMethod('getYiiAppAdvancedExclude');
        $yiiAppAdvancedExclude = $getYiiAppAdvancedExcludeMethod->invoke($this->csFixerFinder);
        foreach ($yiiAppAdvancedExclude as $exclude) {
            $this->assertContains($exclude, $this->csFixerFinder->getYiiAppExclude());
        }
    }

    public function testExceptionOnNotArraySetter()
    {
        $this->setExpectedException(InvalidArgumentException::class);
        $this->csFixerFinder->setYiiAppExclude('notArray');
    }

    public function testIsMergingWithDefault()
    {
        $this->csFixerFinder->setYiiAppExclude(['mergeWithDef']);
        $this->assertContains('mergeWithDef', $this->csFixerFinder->getYiiAppExclude());
        $this->testIsExcludingYiiAppAdvancedDirs();
        $this->testIsExcludingYiiAppBasicDirs();
    }

    public function testIsNotMergingWitHDefault()
    {
        $this->csFixerFinder->setYiiAppExclude(['mergeWithDef'], false);
        $this->assertCount(1, $this->csFixerFinder->getYiiAppExclude());
    }

    protected static function getMethod($name)
    {
        $class = new ReflectionClass('plumthedev\PhpCsFixer\Finder');
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }
}
