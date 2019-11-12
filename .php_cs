<?php
$projectHeader = <<<'HEADER'
Yii2 PHP CS Fixer Config

@author Kacper Pruszynski (plumthedev)
@link https://github.com/plumthedev/yii2-php-cs-fixer-config
@copyright Copyright (c) 2019 plumthedev
@license https://github.com/plumthedev/yii2-php-cs-fixer-config/blob/master/LICENSE
@version 1.0.1
HEADER;

use plumthedev\PhpCsFixer\Config;

$csConfig = Config::create();

// CS Config setup
$csConfig->mergeRules([
    'header_comment' => [
        'header' => $projectHeader,
        'commentType' => 'PHPDoc',
        'separate' => 'bottom',
    ]
]);

// CS Finder setup
$csConfigFinder = $csConfig->getFinder();
$csConfigFinder->in(__DIR__); // set current project directory
$csConfig->setFinder($csConfigFinder);

return $csConfig;

