<?php

namespace Garbodor\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function BienvenidaAction()
    {
        return $this->render('AdminBundle:Default:home.html.twig');
    }
    
    /** Prueba Menu **/
    public function menuAction()
    {
        return $this->render('AdminBundle:Default:menu.html.twig');
    }
}
