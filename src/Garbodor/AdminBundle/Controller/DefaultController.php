<?php

namespace Garbodor\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AdminBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function BienvenidaAction()
    {
        return $this->render('AdminBundle:Default:home.html.twig');
    }
}


