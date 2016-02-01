<?php

namespace Garbodor\RecepcionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Garbodor\RecepcionBundle\Entity\Usuario;

class Usuarios implements FixtureInterface, ContainerAwareInterface
{
    private $container;
    
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {
        $usuarios = array(
            array("rut" => "17949135", 
                "digitoVerificador" => "4", 
                "nombre" => "Sebastián", 
                "apellido" => "Gómez",
                "rol" => "admin",
                "password" => "1234"),
            array("rut" => "17949136", 
                "digitoVerificador" => "2", 
                "nombre" => "Bastian", 
                "apellido" => "Hernandez",
                "rol" => "admin",
                "password" => "1234"),
        );
        
        foreach ($usuarios as $us)
        {
            $usuarioDB = new Usuario();
            
            $usuarioDB->setRut($us["rut"]);
            $usuarioDB->setDigitoVerificador($us["digitoVerificador"]);
            $usuarioDB->setNombre($us["nombre"]);
            $usuarioDB->setApellido($us["apellido"]);
            $usuarioDB->setRol($us["rol"]);
            
            $salt = md5(time());
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($usuarioDB);
            $password = $encoder->encodePassword($us["password"], $salt);
            $usuarioDB->setPassword($password);
            $usuarioDB->setSalt($salt);
            
            $manager->persist($usuarioDB);
        }
        
        $manager->flush();
    }
}
