<?php

/**
* This file is part of the pantarei/user-bundle package.
*
* (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Pantarei\User\Tests\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\User\Model\RoleInterface;

/**
 * Role
 *
 * @ORM\Table(name="test_role")
 * @ORM\Entity(repositoryClass="Pantarei\User\Tests\Entity\RoleRepository")
 */
class Role implements RoleInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    protected $role;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
