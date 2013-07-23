<?php

/**
 * This file is part of the pantarei/user package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\User\Model;

use Symfony\Component\Security\Core\User\UserProviderInterface;

interface UserManagerInterface extends ModelManagerInterface, UserProviderInterface
{
    public function createUser();

    public function deleteUser(UserInterface $user);

    public function reloadUser(UserInterface $user);

    public function updateUser(UserInterface $user);

    public function findUserByUsername($username);
}
