<?php
/**
 * Yii2 PHP CS Fixer Config
 *
 * @author Kacper Pruszynski (plumthedev)
 * @link https://github.com/plumthedev/yii2-php-cs-fixer-config
 * @copyright Copyright (c) 2019 plumthedev
 * @license https://github.com/plumthedev/yii2-php-cs-fixer-config/blob/master/LICENSE
 * @version 1.0.1
 */

namespace plumthedev\PhpCsFixer\tests;

use PHPUnit_Framework_TestCase as TestCase;
use plumthedev\PhpCsFixer\Finder;

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
        $this->assertNotEmpty($this->csFixerFinder->yiiProjectExcludePaths);
    }
}
