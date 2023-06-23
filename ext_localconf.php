<?php

/*
 * This file is part of the package bk2k/iconset-bootstrap.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') || die();

use BK2K\IconsetBootstrap\Icons\IconProvider;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][IconProvider::class]
    = IconProvider::class;
