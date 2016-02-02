<?php

namespace Garbodor\RecepcionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RecepcionBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function inicioAction()
    {
        $peticion = $this->getRequest();
        $session = $peticion->getSession();
        $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, 
                                            $session->get(SecurityContext::AUTHENTICATION_ERROR));
        $mensaje = "Bienvenidos, por favor ingrese sus datos.";
        
        return $this->render('RecepcionBundle:Default:inicio.html.twig', array("mensaje" => $mensaje,
            "error" => $error));
    }
}
