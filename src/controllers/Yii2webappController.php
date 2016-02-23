<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\yii2\webapp\controllers;

/**
 * Goal for Yii2 web application.
 */
class Yii2webappController extends \hidev\controllers\CollectionController
{
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
        return $this->getitem('webdir') ?: $this->getPrjDir() . '/web';
    }

    public function getLogDir()
    {
        return $this->getitem('logdir') ?: '/var/log/php';
    }

    public function getIp()
    {
        $ip = $this->getItem('ip');
        if ($ip === null) {
            $ip = $this->findIp();
            $this->setItem('ip', $ip);
        }

        return $ip;
    }

    public function findIp()
    {
        return gethostbyname($this->getDomain());
    }
}
