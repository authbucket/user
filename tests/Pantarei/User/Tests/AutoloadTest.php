<?php

/**
 * This file is part of the pantarei/uer package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\User\Tests;

/**
 * Test if autoload able to discover all required classes.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class AutoloadTest extends \PHPUnit_Framework_TestCase
{
    public function testServiceProviderClassesExist()
    {
        $this->assertTrue(class_exists('Pantarei\User\Provider\UserServiceProvider'));
    }
}

