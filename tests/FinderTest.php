<?php

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
