<?php

namespace Herper\Bundle\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HerperBaseBundle:Default:index.html.twig');
    }
}
