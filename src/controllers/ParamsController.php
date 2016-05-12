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

class ParamsController extends \hidev\controllers\FileController
{
    public $fileType = 'plain';

    public function actionLoad()
    {
        $this->setItems([
            'text' => $this->getFile()->load() ?: $this->getView()->render('hisite/config/params.twig'),
        ]);
    }

    public function actionSave()
    {
        $text   = $this->getItem('text');
        $env    = $this->takeGoal('hisite')->env;
        $subs   = [
            'YII_ENV'   => "'$env'",
            'YII_DEBUG' => $env === 'prod' ? 'false' : 'true',
        ];
        foreach ($subs as $key => $value) {
            $text = preg_replace("/^defined\('$key'\) or define\('$key',.*$/m", "defined('$key') or define('$key', $value);", $text);
        }
        $this->getFile()->save($text);
    }
}
