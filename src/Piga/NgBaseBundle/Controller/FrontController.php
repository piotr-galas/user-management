<?php

namespace Piga\NgBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('PigaNgBaseBundle:Front:index.html.twig'
        );
    }
}
