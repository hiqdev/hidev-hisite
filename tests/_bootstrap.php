<?php
/**
 * HiDev config for HiSite
 *
 * @link      https://github.com/hiqdev/hidev-hisite
 * @package   hidev-hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL);
date_default_timezone_set('UTC');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

foreach (require __DIR__ . '/../vendor/hiqdev/composer-config-plugin-output/aliases.php' as $alias => $path) {
    Yii::setAlias($alias, $path);
}
