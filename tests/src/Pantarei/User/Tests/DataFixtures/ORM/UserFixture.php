<?php

/**
 * This file is part of the pantarei/user-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\User\Tests\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pantarei\User\Tests\Entity\User;

class UserFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new User();
        $model->setUsername('demousername1')
            ->setPassword('demopassword1')
            ->setSalt('')
            ->setRoles(array(
                'ROLE_USER'
            ))
            ->setMail('demousername1@example.com');
        $manager->persist($model);
        $model = new User();
        $model->setUsername('demousername2')
            ->setPassword('demopassword2')
            ->setSalt('')
            ->setRoles(array(
                'ROLE_USER'
            ))
            ->setMail('demousername2@example.com');
        $manager->persist($model);
        $model = new User();
        $model->setUsername('demousername3')
            ->setPassword('demopassword3')
            ->setSalt('')
            ->setRoles(array(
                'ROLE_USER'
            ))
            ->setMail('demousername3@example.com');
        $manager->persist($model);

        $manager->flush();
    }
}

