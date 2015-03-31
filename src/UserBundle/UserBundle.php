<?php

namespace UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

class UserBundle extends BaseBundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
