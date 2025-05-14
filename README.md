# Clean\PhpAtlas
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
