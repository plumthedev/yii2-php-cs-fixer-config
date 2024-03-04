# Dear Packagist maintainer, looks it is me plumthedev and I really really need your help! Could you change my email to kacper.pruszynski99@gmail.com? Thanks in advance!

# Yii2 PHP CS Fixer Config
![Packagist downloads](https://img.shields.io/packagist/dt/plumthedev/yii2-php-cs-fixer-config?color=%238e44ad)
![GitHub license](https://img.shields.io/github/license/plumthedev/yii2-php-cs-fixer-config?color=%238e44ad)
![GitHub stars](https://img.shields.io/github/stars/plumthedev/yii2-php-cs-fixer-config?color=%238e44ad)

PHP CS Fixer config for Yii2 projects. Contains [Config](src/Config.php) and [Finder](src/Finder.php) which excludes by default Yii2 app basic and advanced directories.   
The ruleset is [grab from Yii 2 ecosystem](https://github.com/yiisoft/yii2/blob/master/cs/src/YiiConfig.php) and is automatically updated with it. 

## Installation
```shell script
$ composer require --dev plumthedev/yii2-php-cs-fixer-config
```

## Usage
Create a configuration file `.php_cs` in the root of your project:

```php
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

```

## Running the tests

PHPUnit

```shell script
$ composer unit-tests
```

PHP CS Fixer

```shell script
$ composer cs-fix
```

## Contributing

This library is open source so if you want to contribute, you can.
>
Please submit bug reports, suggestions and pull requests to the [GitHub issue tracker](https://github.com/plumthedev/yii2-php-cs-fixer-config/issues).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

