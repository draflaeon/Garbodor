<?php

namespace Garbodor\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaPrecio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ListaPrecio
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
     * @var string
     *
     * @ORM\Column(name="tipo_motor", type="string", length=5)
     */
    private $tipoMotor;

   /** 
    *
    * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\ListaTrabajo")
    */
    private $trabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio_trabajo", type="integer")
     */
    private $precioTrabajo;


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
     * Set tipoMotor
     *
     * @param string $tipoMotor
     * @return ListaPrecio
     */
    public function setTipoMotor($tipoMotor)
    {
        $this->tipoMotor = $tipoMotor;
    
        return $this;
    }

    /**
     * Get tipoMotor
     *
     * @return string 
     */
    public function getTipoMotor()
    {
        return $this->tipoMotor;
    }

    public function setTrabajo(\Garbodor\MotorBundle\Entity\ListaTrabajo $trabajo)
    {
        $this->trabajo = $trabajo;
    
        return $this;
    }

    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * Set precioTrabajo
     *
     * @param integer $precioTrabajo
     * @return ListaPrecio
     */
    public function setPrecioTrabajo($precioTrabajo)
    {
        $this->precioTrabajo = $precioTrabajo;
    
        return $this;
    }

    /**
     * Get precioTrabajo
     *
     * @return integer 
     */
    public function getPrecioTrabajo()
    {
        return $this->precioTrabajo;
    }
}
