<?php namespace Test\Clean\PhpAtlas;

use Clean\PhpAtlas as PhpAtlas;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function testGetMethodShortDescriptoion()
    {
        $method = new PhpAtlas\ClassMethod('ArrayIterator::count');
        $this->assertEquals('Count elements', $method->getMethodShortDescription());
    }
}
