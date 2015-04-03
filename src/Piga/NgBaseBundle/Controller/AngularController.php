<?php

namespace Piga\NgBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

class AngularController extends BaseController
{
    public function indexAction()
    {
        return $this->render('PigaNgBaseBundle:Angular:index.html.twig'
        );
    }
}
