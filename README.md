# Clean\PhpAtlas

[![Latest Stable Version](http://poser.pugx.org/clean/phpatlas/v)](https://packagist.org/packages/clean/phpatlas) 
[![Total Downloads](http://poser.pugx.org/clean/phpatlas/downloads)](https://packagist.org/packages/clean/phpatlas) 
[![Monthly Downloads](http://poser.pugx.org/clean/phpatlas/d/monthly)](https://packagist.org/packages/clean/phpatlas)
[![License](http://poser.pugx.org/clean/phpatlas/license)](https://packagist.org/packages/clean/phpatlas) 
[![PHP Version Require](http://poser.pugx.org/clean/phpatlas/require/php)](https://packagist.org/packages/clean/phpatlas)

PhpAtlas allow to access description of all PHP methods used in the [PHP manual](https://www.php.net/manual/en/indexes.functions.php)

## Installation

via Composer

```json
"require": {
  "clean/phpatlas": "dev-master"
}
```

## Usage

```php
$method = \Clean\PhpAtlas\ClassName('ArrayAccess::offsetExists');
echo $method->getMethodShortDescription(); // => "Whether an offset exists",
```
