<?php
/**
 * Created by IntelliJ IDEA.
 * User: nick
 * Date: 31.01.16
 * Time: 19:39
 */

namespace Backend\Src\Tests;


class AutoloaderTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {

    }

    /**
     *
     */
    public function test()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
