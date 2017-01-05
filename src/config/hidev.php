<?php
/**
 * HiDev config for HiSite
 *
 * @link      https://github.com/hiqdev/hidev-hisite
 * @package   hidev-hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'hisite' => [
                'class' => 'hidev\hisite\controllers\HiSiteController',
            ],
            'hisite-defines' => [
                'class' => 'hidev\hisite\controllers\DefinesController',
            ],
            'include' => [
                '@hidev/hisite/config/goals.yml',
            ],
            'views' => [
                '@hidev/hisite/views',
            ],
            'vcsignore' => [
                '/runtime/*'    => 'HiSite directories',
                '/web/assets/*' => 'HiSite directories',
            ],
        ],
    ],
];
