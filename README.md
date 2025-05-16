# Clean\PhpAtlas
[![Build Status](https://travis-ci.org/clean/view.svg?branch=master)](https://travis-ci.org/clean/phpatlas)
[![Code Climate](https://codeclimate.com/github/clean/view/badges/gpa.svg)](https://codeclimate.com/github/clean/phpatlas)
[![Test Coverage](https://codeclimate.com/github/clean/view/badges/coverage.svg)](https://codeclimate.com/github/clean/phpatlas/coverage)
[![Issue Count](https://codeclimate.com/github/clean/view/badges/issue_count.svg)](https://codeclimate.com/github/clean/phpatlas)

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
