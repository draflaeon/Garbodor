<?php

namespace Garbodor\RecepcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Direccion
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
    *
    *@ORM\ManyToOne(targetEntity="Garbodor\RecepcionBundle\Entity\Cliente")
    */
    private $rutCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;


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
     * @return Direccion
     */
    public function setRutCliente(\Garbodor\RecepcionBundle\Entity\Cliente $rutCliente)
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
     * Set direccion
     *
     * @param string $direccion
     * @return Direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function __toString()
    {
        return $this->getDireccion();
    }
}
