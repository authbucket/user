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

use Symfony\Component\Security\Core\User\AdvancedUserInterface as SecurityUserInterface;

interface UserInterface extends ModelInterface, SecurityUserInterface
{
    public function setUsername($username);

    public function setPassword($password);

    public function setSalt($salt);

    public function setRoles($roles);

    public function setMail($mail);

    public function getMail();
}
