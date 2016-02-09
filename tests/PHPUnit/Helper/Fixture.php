<?php

namespace Rootwork\Test\PHPUnit\Helper;

/**
 * Fixture for testing helpers.
 *
 * @copyright   Copyright (c) 2015-2016 Rootwork InfoTech LLC (www.rootwork.it)
 * @license     BSD-3-clause
 * @author      Mike Soule <mike@rootwork.it>
 * @package     Rootwork\Test\Phalcon\Session\Adapter\Jwt
 */
class Fixture
{

    /**
     * Protected property.
     *
     * @var mixed
     */
    protected $protProperty;

    /**
     * Private property.
     *
     * @var mixed
     */
    private $privProperty;

    /**
     * Protected static property.
     *
     * @var mixed
     */
    protected static $protStaticProperty;

    /**
     * Private static property.
     *
     * @var mixed
     */
    private static $privStaticProperty;

    /**
     * @return bool
     */
    protected function protNoArgs()
    {
        return true;
    }

    /**
     * @return bool
     */
    private function privNoArgs()
    {
        return true;
    }

    /**
     * @param string $arg1
     * @param string $arg2
     *
     * @return string "Arg1:Arg2"
     */
    protected function protWithArgs($arg1, $arg2)
    {
        return "$arg1:$arg2";
    }

    /**
     * @param string $arg1
     * @param string $arg2
     *
     * @return string "Arg1:Arg2"
     */
    private function privWithArgs($arg1, $arg2)
    {
        return "$arg1:$arg2";
    }

    /**
     * @return bool
     */
    protected static function protStaticNoArgs()
    {
        return true;
    }

    /**
     * @return bool
     */
    private static function privStaticNoArgs()
    {
        return true;
    }

    /**
     * @param string $arg1
     * @param string $arg2
     *
     * @return string "Arg1:Arg2"
     */
    protected static function protStaticWithArgs($arg1, $arg2)
    {
        return "$arg1:$arg2";
    }

    /**
     * @param string $arg1
     * @param string $arg2
     *
     * @return string "Arg1:Arg2"
     */
    private static function privStaticWithArgs($arg1, $arg2)
    {
        return "$arg1:$arg2";
    }
}
