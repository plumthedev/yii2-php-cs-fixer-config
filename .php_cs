<?php

use plumthedev\PhpCsFixer\Config;

$csConfig = Config::create();
$csConfigFinder = $csConfig->getFinder();

$csConfigFinder->in(__DIR__);
$csConfig->setFinder($csConfigFinder);

return $csConfig;

