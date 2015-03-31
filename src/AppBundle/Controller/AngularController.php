<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

class AngularController extends BaseController
{
    public function indexAction()
    {
        return $this->render('AppBundle:Angular:index.html.twig'
        );
    }
}
