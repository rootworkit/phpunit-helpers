<?php

namespace Rootwork\Test\PHPUnit\Helper;

use PHPUnit_Framework_TestCase as TestCase;
use Rootwork\PHPUnit\Helper\Accessor;
use Rootwork\Test\PHPUnit\Helper\Fixture;

/**
 * Test case for accessor helper.
 *
 * @copyright   Copyright (c) 2015-2016 Rootwork InfoTech LLC (www.rootwork.it)
 * @license     BSD-3-clause
 * @author      Mike Soule <mike@rootwork.it>
 * @package     Rootwork\Test\Phalcon\Session\Adapter\Jwt
 */
class AccessorTest extends TestCase
{
    use Accessor;

    /**
     * Subject Under Test
     *
     * @var Fixture
     */
    public $sut;

    /**
     * Set up the test.
     */
    public function setUp()
    {
        $this->sut = new Fixture();
    }

    /**
     * Test setting and getting private and protected properties.
     */
    public function testSetGetPropertyValue()
    {
        $this->setPropertyValue($this->sut, 'protProperty', 'foo');
        $this->setPropertyValue($this->sut, 'privProperty', 'bar');

        $foo = $this->getPropertyValue($this->sut, 'protProperty');
        $bar = $this->getPropertyValue($this->sut, 'privProperty');

        $this->assertEquals('foo', $foo);
        $this->assertEquals('bar', $bar);
    }

    /**
     * Test invoking private and protected methods.
     */
    public function testInvokeMethod()
    {
        $this->assertTrue(
            $this->invokeMethod($this->sut, 'protNoArgs')
        );

        $this->assertTrue(
            $this->invokeMethod($this->sut, 'privNoArgs')
        );

        $this->assertEquals(
            'foo:bar',
            $this->invokeMethod($this->sut, 'protWithArgs', ['foo', 'bar'])
        );

        $this->assertEquals(
            'foo:bar',
            $this->invokeMethod($this->sut, 'privWithArgs', ['foo', 'bar'])
        );
    }
}
