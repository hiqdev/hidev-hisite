<?php
/**
 * HiDev config for HiSite
 *
 * @link      https://github.com/hiqdev/hidev-hisite
 * @package   hidev-hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\hisite\controllers;

/**
 * Controller for generating `src/config/defines.php` file.
 */
class DefinesController extends \hidev\controllers\FileController
{
    public $fileType = 'plain';

    public function actionLoad()
    {
        $this->setItems([
            'text' => $this->getFile()->load() ?: $this->getView()->render($this->template),
        ]);
    }

    public function actionSave()
    {
        $text = $this->getItem('text');
        foreach ($this->getHisite()->getDefines() as $key => $value) {
            $value = var_export($value, true);
            $text = preg_replace("/^defined\('$key'\) or define\('$key',.*$/m", "defined('$key') or define('$key', $value);", $text);
        }
        $this->getFile()->save($text);
    }

    public function getHisite()
    {
        return $this->takeGoal('hisite');
    }
}
