<?php

namespace Garbodor\RecepcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="rut_cliente", type="integer")
     */
    private $rutCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_cliente", type="string", length=2)
     */
    private $dvCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cliente", type="string", length=255)
     */
    private $nombreCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_cliente", type="string", length=255)
     */
    private $apellidoCliente;


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
     * Set rutCliente
     *
     * @param integer $rutCliente
     * @return Cliente
     */
    public function setRutCliente($rutCliente)
    {
        $this->rutCliente = $rutCliente;
    
        return $this;
    }

    /**
     * Get rutCliente
     *
     * @return integer 
     */
    public function getRutCliente()
    {
        return $this->rutCliente;
    }

    /**
     * Set dvCliente
     *
     * @param string $dvCliente
     * @return Cliente
     */
    public function setDvCliente($dvCliente)
    {
        $this->dvCliente = $dvCliente;
    
        return $this;
    }

    /**
     * Get dvCliente
     *
     * @return string 
     */
    public function getDvCliente()
    {
        return $this->dvCliente;
    }

    /**
     * Set nombreCliente
     *
     * @param string $nombreCliente
     * @return Cliente
     */
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;
    
        return $this;
    }

    /**
     * Get nombreCliente
     *
     * @return string 
     */
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }

    /**
     * Set apellidoCliente
     *
     * @param string $apellidoCliente
     * @return Cliente
     */
    public function setApellidoCliente($apellidoCliente)
    {
        $this->apellidoCliente = $apellidoCliente;
    
        return $this;
    }

    /**
     * Get apellidoCliente
     *
     * @return string 
     */
    public function getApellidoCliente()
    {
        return $this->apellidoCliente;
    }

    public function __toString()
    {
        return $this->getNombreCliente();
    }
}
