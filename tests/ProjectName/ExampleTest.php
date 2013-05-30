<?php
namespace test\ProjectName;

use ProjectName\Example;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    function setUp()
    {
        $this->e = new Example;
    }

    public function testIsTrue()
    {
        $this->assertTrue(1 === 1);
    }

    public function testSetGet()
    {
        $value = 123;
        $this->e->setVariable($value);
        $this->assertEquals($value, $this->e->getVariable());
    }
}
