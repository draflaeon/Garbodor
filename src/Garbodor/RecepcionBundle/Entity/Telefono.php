<?php

namespace Garbodor\RecepcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Telefono
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
     * @ORM\ManyToOne(targetEntity="Garbodor\RecepcionBundle\Entity\Cliente")
     */
    private $cliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_telefono", type="integer")
     */
    private $numeroTelefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_telefono", type="integer")
     */
    private $tipoTelefono;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setCliente(\Garbodor\RecepcionBundle\Entity\Cliente $cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set numeroTelefono
     *
     * @param integer $numeroTelefono
     * @return Telefono
     */
    public function setNumeroTelefono($numeroTelefono)
    {
        $this->numeroTelefono = $numeroTelefono;
    
        return $this;
    }

    /**
     * Get numeroTelefono
     *
     * @return integer 
     */
    public function getNumeroTelefono()
    {
        return $this->numeroTelefono;
    }

    /**
     * Set tipoTelefono
     *
     * @param integer $tipoTelefono
     * @return Telefono
     */
    public function setTipoTelefono($tipoTelefono)
    {
        $this->tipoTelefono = $tipoTelefono;
    
        return $this;
    }

    /**
     * Get tipoTelefono
     *
     * @return integer 
     */
    public function getTipoTelefono()
    {
        return $this->tipoTelefono;
    }
}
