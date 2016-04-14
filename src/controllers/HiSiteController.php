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
class HiSiteController extends \hidev\controllers\CollectionController
{
    private $_ip;
    private $_fpmSocket;

    public function getDomain()
    {
        return $this->getItem('domain') ?: $this->takePackage()->name;
    }

    public function getPrjDir()
    {
        return $this->getItem('prjdir') ?: $this->takeGoal('start')->prjdir;
    }

    public function getWebDir()
    {
        return $this->getItem('webdir') ?: $this->getPrjDir() . '/web';
    }

    public function getLogDir()
    {
        return $this->getItem('logdir') ?: '/var/log/php';
    }

    public function setIp($value)
    {
        $this->_ip = $value;
    }

    public function getIp()
    {
        if ($this->_ip === null) {
            $this->_ip = $this->findIp();
        }

        return $this->_ip;
    }

    public function findIp()
    {
        return gethostbyname($this->getDomain());
    }

    public function getFpmSocket()
    {
        if ($this->_fpmSocket === null) {
            $this->_fpmSocket = 'unix:' . $this->findFpmSocketFile();
        }

        return $this->_fpmSocket;
    }

    public function findFpmSocketFile()
    {
        $files = ['/var/run/php5-fpm.sock', '/run/php/php7.0-fpm.sock'];
        foreach ($files as $file) {
            if (file_exists($file)) {
                return $file;
            }
        }

        return reset($files);
    }
}
