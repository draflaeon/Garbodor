<?php

namespace Garbodor\RecepcionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RecepcionBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function inicioAction()
    {
        $mensaje = "Bienvenidos, por favor ingrese sus datos.";
        return $this->render('RecepcionBundle:Default:inicio.html.twig', array("mensaje" => $mensaje));
    }
}
