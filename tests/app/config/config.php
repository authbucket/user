<?php

/**
 * This file is part of the pantarei/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__ . '/security.php';

$app['twig.path'] = array(
    __DIR__ . '/../Resources/views',
);

$app['pantarei_user.model'] = array(
    'user' => 'Pantarei\\User\\Tests\\Entity\\User',
    'role' => 'Pantarei\\User\\Tests\\Entity\\Role',
);
