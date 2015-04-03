<?php

namespace Piga\NgUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

class PigaNgUserBundle extends BaseBundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
