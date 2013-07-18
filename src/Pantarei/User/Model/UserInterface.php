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

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

interface UserInterface extends AdvancedUserInterface
{
    public function setLangcode($langcode);

    public function getLangcode();

    public function setMail($mail);

    public function getMail();

    public function setCreated($created);

    public function getCreated();

    public function setAccess($access);

    public function getAccess();

    public function setLogin($login);

    public function getLogin();

    public function setStatus($status);

    public function getStatus();

    public function setTimezone($timezone);

    public function getTimezone();

    public function setInit($init);

    public function getInit();
}
