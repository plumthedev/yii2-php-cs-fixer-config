<?php
$composerJsonPath = __DIR__ . '/composer.json';
$composerJson = file_get_contents($composerJsonPath);
$composerProject = json_decode($composerJson);
$currentYear = date('Y');

$projectHeader = <<<HEADER
Yii2 PHP CS Fixer Config

@author Kacper Pruszynski (plumthedev)
@link https://github.com/plumthedev/yii2-php-cs-fixer-config
@copyright Copyright (c) 2019 - {$currentYear} plumthedev
@license https://github.com/plumthedev/yii2-php-cs-fixer-config/blob/master/LICENSE
@version {$composerProject->version}
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

