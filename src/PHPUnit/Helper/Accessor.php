<?php

namespace Rootwork\PHPUnit\Helper;

use ReflectionMethod;
use ReflectionProperty;

/**
 * Accessor helper for efficiently accessing protected/private properties and methods.
 *
 * @copyright   Copyright (c) 2015-2016 Rootwork InfoTech LLC (www.rootwork.it)
 * @license     BSD-3-Clause
 * @author      Mike Soule <mike@rootwork.it>
 * @package     Rootwork\PHPUnit\Helper
 */
trait Accessor
{

    /**
     * Set the value of a non-public property.
     *
     * @param object $object
     * @param string $name
     * @param mixed $value
     */
    public function setPropertyValue($object, $name, $value)
    {
        $property = new ReflectionProperty($object, $name);
        $property->setAccessible(true);
        $property->setValue($object, $value);
    }

    /**
     * Get the value of a non-public property.
     *
     * @param object $object
     * @param string $name
     * @return mixed
     */
    public function getPropertyValue($object, $name)
    {
        $property = new ReflectionProperty($object, $name);
        $property->setAccessible(true);
        return $property->getValue($object);
    }

    /**
     * Invoke a non-public method
     *
     * @param object $object
     * @param string $name
     * @param array  $args
     * @return mixed
     */
    public function invokeMethod($object, $name, array $args = [])
    {
        $method = new ReflectionMethod($object, $name);
        $method->setAccessible(true);

        if (empty($args)) {
            return $method->invoke($object);
        }

        return $method->invokeArgs($object, $args);
    }

    /**
     * Set the value of a non-public static property.
     *
     * @param string $class
     * @param string $name
     * @param mixed $value
     */
    public function setStaticPropertyValue($class, $name, $value)
    {
        $property = new ReflectionProperty($class, $name);
        $property->setAccessible(true);
        $property->setValue(null, $value);
    }

    /**
     * Get the value of a non-public static property.
     *
     * @param string $class
     * @param string $name
     * @return mixed
     */
    public function getStaticPropertyValue($class, $name)
    {
        $property = new ReflectionProperty($class, $name);
        $property->setAccessible(true);
        return $property->getValue($class);
    }

    /**
     * Invoke a non-public static method
     *
     * @param string $class
     * @param string $name
     * @param array  $args
     * @return mixed
     */
    public function invokeStaticMethod($class, $name, array $args = [])
    {
        $method = new ReflectionMethod($class, $name);
        $method->setAccessible(true);

        if (empty($args)) {
            return $method->invoke(null);
        }

        return $method->invokeArgs(null, $args);
    }
}
