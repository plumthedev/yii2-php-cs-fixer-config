# Yii2 PHP CS Fixer Config
PHP CS Fixer config for Yii2 projects. The ruleset is [grab from Yii 2 ecosystem](https://github.com/yiisoft/yii2/blob/master/cs/src/YiiConfig.php).

## Installation
```shell script
$ composer require --dev plumthedev/yii2-php-cs-fixer-config
```

## Usage
Create a configuration file `.php_cs` in the root of your project:

```php
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

```

## Running the tests

PHPUnit

```shell script
$ composer unit-tests
```

PHP CS Fixer

```
$ composer cs-fix
```

## Contributing

This library is open source so if you want to contribute, you can.
>
Please submit bug reports, suggestions and pull requests to the [GitHub issue tracker](https://github.com/plumthedev/yii2-php-cs-fixer-config/issues).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

