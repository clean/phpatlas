# Clean\PhpAtlas

[![Latest Stable Version](http://poser.pugx.org/clean/phpatlas/v)](https://packagist.org/packages/clean/phpatlas) 
[![Total Downloads](http://poser.pugx.org/clean/phpatlas/downloads)](https://packagist.org/packages/clean/phpatlas) 
[![Monthly Downloads](http://poser.pugx.org/clean/phpatlas/d/monthly)](https://packagist.org/packages/clean/phpatlas)
[![License](http://poser.pugx.org/clean/phpatlas/license)](https://packagist.org/packages/clean/phpatlas) 
[![PHP Version Require](http://poser.pugx.org/clean/phpatlas/require/php)](https://packagist.org/packages/clean/phpatlas)

PhpAtlas is a lightweight PHP reflection utility that allows you to fetch short metadata descriptions and PHP manual links for PHP functions or class methods.

## Installation

via Composer

```json
"require": {
  "clean/phpatlas": "dev-master"
}
```

## Features
- Reflect class methods and global functions
- Generate direct links to php.net manual pages

## Example of usage

```php
use Clean\PhpAtlas\ClassMethod;

$method = new ClassMethod('ArrayIterator::count');

echo $method->getMethodShortDescription(); // e.g. "Count elements"
echo $method->getMethodPHPDocLink();       // https://www.php.net/manual/en/arrayiterator.count.php

// for standalone functions
$function = new ClassMethod('explode');
echo $function->getMethodPHPDocLink(); // https://www.php.net/manual/en/function.explode.php

```

## License

This package is licensed under the MIT License. See the [LICENSE](LICENCE) file for details.
