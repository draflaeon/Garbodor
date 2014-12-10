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
        return $this->render('AdminBundle:Default:admin.html.twig');
    }
    /** Prueba Menu Boostrap **/
    public function menuBAction()
    {
        return $this->render('AdminBundle:Default:adminB.html.twig');
    }
    /** Prueba Menu Boostrap **/
    public function menuSinTwigAction()
    {
        return $this->render('AdminBundle:Default:menuSinTwig.html.twig');
    }
}


