<?php

/*
 * This file is part of the package bk2k/iconset-bootstrap.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconset Bootstrap',
    'description' => 'Bootstrap Iconset for the Bootstrap Package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
            'bootstrap_package' => '12.0.0-15.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'BK2K\\IconsetBootstrap\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'author' => 'Benjamin Kott',
    'author_email' => 'info@bk2k.info',
    'author_company' => 'private',
    'version' => '1.0.0',
];
