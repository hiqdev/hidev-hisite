# HiDev HiSite

**HiDev config for HiSite**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hidev-hisite/v/stable)](https://packagist.org/packages/hiqdev/hidev-hisite)
[![Total Downloads](https://poser.pugx.org/hiqdev/hidev-hisite/downloads)](https://packagist.org/packages/hiqdev/hidev-hisite)
[![Build Status](https://img.shields.io/travis/hiqdev/hidev-hisite.svg)](https://travis-ci.org/hiqdev/hidev-hisite)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hidev-hisite.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-hisite/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hidev-hisite.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-hisite/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hidev-hisite/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hidev-hisite/dev-master)

[HiDev](https://github.com/hiqdev/hidev) is a task runner, code generator and build tool for easier continuos integration.

This plugin provides HiDev configuration for HiSite.

[HiSite](https://github.com/hiqdev/hisite) is another way of building Yii2 based web applications.

Provides:

- creating directory structure and files:
    - `runtime/`
    - `web/assets/`
    - `web/index.php`
    - `src/config/bootstrap.php`
    - `src/config/defines.php`
    - `src/config/hidev.php`
    - `src/config/hisite.php`
    - `src/config/params.php`
    - `src/config/web.php`
- setting permissions for directories and files
- nginx config generation with help of `hidev-nginx` plugin

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hidev-hisite"
```

or add

```json
"hiqdev/hidev-hisite": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
