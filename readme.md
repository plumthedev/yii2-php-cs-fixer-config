# Yii2 PHP CS Fixer Config
PHP CS Fixer config for Yii2 projects

## Installation
```shell script
$ composer require --dev plumthedev/yii2-php-cs-fixer-config
```

## Usage
Create a configuration file `.php_cs` in the root of your project:

```php
<?php

use plumthedev\PhpCsFixer\Config;

$csConfig = Config::create();
$csConfigFinder = $csConfig->getFinder();

$csConfigFinder->in(__DIR__); // set finder root directory
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

