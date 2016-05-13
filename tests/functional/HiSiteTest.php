<?php

/*
 * HiDev Nginx plugin
 *
 * @link      https://github.com/hiqdev/hidev-hisite
 * @package   hidev-hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\hisite\tests\functional;

use hidev\tests\functional\Tester;

class NginxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;

    protected function setUp()
    {
        $this->tester = new Tester($this);
        $this->tester->clean = true;
    }

    protected function tearDown()
    {
        $this->tester = null;
    }

    public function testMinimal()
    {
        $this->tester->config(__DIR__ . '/minimal/.hidev/config.yml');
        $this->tester->hidev('hisite');
        $this->tester->assertFiles(__DIR__ . '/minimal', ['src', 'web']);
    }
}
