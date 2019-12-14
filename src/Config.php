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

namespace plumthedev\PhpCsFixer;

use yii\cs\YiiConfig as YiiCsFixerConfig;

class Config extends YiiCsFixerConfig
{
    public function __construct($name = 'yii2-php-cs-fixer-config')
    {
        parent::__construct($name);
        $this->setFinder(Finder::create());
    }
}
