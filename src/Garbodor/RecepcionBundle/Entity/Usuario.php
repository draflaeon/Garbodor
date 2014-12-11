<?php

namespace Garbodor\RecepcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rut_usuario", type="integer")
     */
    private $rutUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_usuario", type="string", length=2)
     */
    private $dvUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_usuario", type="string", length=255)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_usuario", type="string", length=255)
     */
    private $apellidoUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="rol_usuario", type="string", length=255)
     */
    private $rolUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rutUsuario
     *
     * @param integer $rutUsuario
     * @return Usuario
     */
    public function setRutUsuario($rutUsuario)
    {
        $this->rutUsuario = $rutUsuario;
    
        return $this;
    }

    /**
     * Get rutUsuario
     *
     * @return integer 
     */
    public function getRutUsuario()
    {
        return $this->rutUsuario;
    }

    /**
     * Set dvUsuario
     *
     * @param string $dvUsuario
     * @return Usuario
     */
    public function setDvUsuario($dvUsuario)
    {
        $this->dvUsuario = $dvUsuario;
    
        return $this;
    }

    /**
     * Get dvUsuario
     *
     * @return string 
     */
    public function getDvUsuario()
    {
        return $this->dvUsuario;
    }

    /**
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    
        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string 
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set apellidoUsuario
     *
     * @param string $apellidoUsuario
     * @return Usuario
     */
    public function setApellidoUsuario($apellidoUsuario)
    {
        $this->apellidoUsuario = $apellidoUsuario;
    
        return $this;
    }

    /**
     * Get apellidoUsuario
     *
     * @return string 
     */
    public function getApellidoUsuario()
    {
        return $this->apellidoUsuario;
    }

    /**
     * Set rolUsuario
     *
     * @param string $rolUsuario
     * @return Usuario
     */
    public function setRolUsuario($rolUsuario)
    {
        $this->rolUsuario = $rolUsuario;
    
        return $this;
    }

    /**
     * Get rolUsuario
     *
     * @return string 
     */
    public function getRolUsuario()
    {
        return $this->rolUsuario;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }
}
