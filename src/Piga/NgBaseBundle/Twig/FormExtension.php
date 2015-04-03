<?php

namespace Piga\NgBaseBundle\Twig;

class FormExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('dot_encode', array($this, 'dotEncode')),
        );
    }

    public function dotEncode($formVariable)
    {
        $modify = str_replace(']','',$formVariable);
        return str_replace('[','.', $modify);
    }

    public function getName()
    {
        return 'app_form';
    }
}
