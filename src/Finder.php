<?php
/**
 * Yii2 PHP CS Fixer Config - Finder.
 *
 * @author Kacper Pruszynski (plumthedev)
 * @version 1.0.0
 */

namespace plumthedev\PhpCsFixer;

use PhpCsFixer\Finder as PhpCsFixerFinder;

class Finder extends PhpCsFixerFinder
{
    public $yiiProjectExcludePaths = [
        'views',
        'mail',
        'vendor',
        'backend/views',
        'frontend/views',
        'common/mail',
    ];

    public function __construct()
    {
        parent::__construct();
        $this->exclude($this->yiiProjectExcludePaths);
    }
}
