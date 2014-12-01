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
    *@ORM\ManyToOne(targetEntity="Garbodor\RecepcionBundle\Entity\Cliente")
    */
    private $rutCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100)
     */
    private $tipo;


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
     * @return Telefono
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
     * Set telefono
     *
     * @param integer $telefono
     * @return Telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Telefono
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    
    public function __toString()
    {
        return $this->getTelefono();
    }
}
