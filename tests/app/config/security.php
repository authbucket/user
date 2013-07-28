<?php

/**
 * This file is part of the pantarei/user package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$app['security.firewalls'] = array(
    'login_path' => array(
        'pattern' => '^/login$',
        'anonymous' => true,
    ),
    'default' => array(
        'pattern' => '^/',
        'form' => array(
            'login_path' => '/login',
            'check_path' => '/login_check',
        ),
        'http' => true,
        'users' => array(
            'demousername1' => array('ROLE_USER', 'demopassword1'),
            'demousername2' => array('ROLE_USER', 'demopassword2'),
            'demousername3' => array('ROLE_USER', 'demopassword3'),
        ),
    ),
);
