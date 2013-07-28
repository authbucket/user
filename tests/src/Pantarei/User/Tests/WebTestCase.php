<?php

/**
 * This file is part of the pantarei/user package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\User\Tests;

use Silex\WebTestCase as SilexWebTestCase;

/**
 * Extend Silex\WebTestCase for test case require database and web interface
 * setup.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
abstract class WebTestCase extends SilexWebTestCase
{
    public function createApplication()
    {
        require __DIR__ . '/../../../../app/AppKernel.php';
        require __DIR__ . '/../../../../app/config/config_test.php';
        require __DIR__ . '/../../../../app/config/routing.php';

        return $app;
    }
}
