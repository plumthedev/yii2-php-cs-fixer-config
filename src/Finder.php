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
