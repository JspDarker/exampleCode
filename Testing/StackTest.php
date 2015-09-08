<?php

/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 08/09/2015
 * Time: 06:31
 */
class StackTest extends PHPUnit_Framework_TestCase
{
    //https://phpunit.de/manual/current/en/appendixes.assertions.html#appendixes.assertions.assertArrayHasKey
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testAssertContains()
    {
        $input = array('id' => 100, 'name' => 'dmd');
        $this->assertArrayHasKey('id', $input);

        $this->assertContains(34, array(1, 2, 34,));
        $this->assertContains('foobar', 'foobar');
        //$this->assertContainsOnly('string', array("strinkg1","ddm"));
        $this->assertEquals(array('a', 'b', 'c'), array('a', 'b', 'c'));

        $this->assertFileEquals('img1.jpg', 'img1.jpg');
    }
}