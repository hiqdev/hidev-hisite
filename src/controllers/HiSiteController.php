<?php

/*
 * HiDev config for HiSite
 *
 * @link      https://github.com/hiqdev/hidev-hisite
 * @package   hidev-hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\hisite\controllers;

/**
 * Goal for HiSite.
 */
class HiSiteController extends \hidev\controllers\DirectoryController
{
    public $env;

    protected $_nginx;
    protected $_vhost;

    public function getNginx()
    {
        if ($this->_nginx === null) {
            $this->_nginx = $this->takeGoal('nginx');
        }

        return $this->_nginx;
    }

    public function getVhost()
    {
        if ($this->_vhost === null) {
            $this->_vhost = $this->getNginx()->get('default');
        }

        return $this->_vhost;
    }

    public function setVhost(array $params)
    {
        foreach ($params as $key => $value) {
            $this->getVhost()->{$key} = $value;
        }
    }
}
