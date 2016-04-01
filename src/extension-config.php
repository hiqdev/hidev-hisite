<?php

/*
 * HiDev config for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-yii2-web-app
 * @package   hidev-yii2-web-app
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'yii2webapp' => [
                'class' => 'hidev\yii2\webapp\controllers\Yii2webappController',
            ],
            'include' => [
                '@hidev/yii2/webapp/config.yml',
            ],
            'views' => [
                '@hidev/yii2/webapp/views',
            ],
        ],
    ],
];
