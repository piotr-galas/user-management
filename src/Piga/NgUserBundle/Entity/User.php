<?php

namespace Piga\NgUserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

class User extends BaseUser
{
    protected $id;

    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


}
