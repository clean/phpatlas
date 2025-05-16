<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Clean\PhpAtlas\ClassMethod;

// Example 1: Using a class method
$method1 = new ClassMethod('ArrayIterator::count');

echo "Method: ArrayIterator::count\n";
echo "Short Description: " . $method1->getMethodShortDescription() . "\n";
echo "PHP Manual Link: " . $method1->getMethodPHPDocLink() . "\n";

// Example 2: Using a built-in function
$method2 = new ClassMethod('explode');

echo "\nMethod: explode\n";
echo "Short Description: " . $method2->getMethodShortDescription() . "\n";
echo "PHP Manual Link: " . $method2->getMethodPHPDocLink() . "\n";

