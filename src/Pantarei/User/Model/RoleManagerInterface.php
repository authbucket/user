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

use Symfony\Component\Security\Core\Role\RoleInterface;

interface RoleManagerInterface extends ModelManagerInterface
{
    public function createRole();

    public function deleteRole(RoleInterface $role);

    public function reloadRole(RoleInterface $role);

    public function updateRole(RoleInterface $role);

    public function findRoles();
}
