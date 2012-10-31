<?php
require __DIR__."/../lib/foo.php";
class FooTest extends PHPUnit_Framework_TestCase
{
    public function testFunction()
    {
        $this->assertEquals(2, addOne(1));
    }

    public function testClass()
    {
        $foo = new Foo();
        $this->assertEquals("foo", $foo->foo());
    }
}
