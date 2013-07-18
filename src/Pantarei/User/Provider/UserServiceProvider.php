<?php

/**
 * This file is part of the pantarei/user package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\User\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * User service provider as plugin for Silex SecurityServiceProvider.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class UserServiceProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {
    }

    public function boot(Application $app)
    {
    }
}
