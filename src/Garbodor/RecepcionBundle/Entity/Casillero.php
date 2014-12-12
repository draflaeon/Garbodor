<?php

namespace Garbodor\RecepcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Casillero
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Casillero
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
     * @ORM\Column(name="numero_casillero", type="string", length=100)
     */
    private $numeroCasillero;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Garbodor\PresupuestoBundle\Entity\Presupuesto")
     */
    private $presupuesto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_asignacion", type="datetime")
     */
    private $fechaAsignacion;


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
     * Set numeroCasillero
     *
     * @param string $numeroCasillero
     * @return Casillero
     */
    public function setNumeroCasillero($numeroCasillero)
    {
        $this->numeroCasillero = $numeroCasillero;
    
        return $this;
    }

    /**
     * Get numeroCasillero
     *
     * @return string 
     */
    public function getNumeroCasillero()
    {
        return $this->numeroCasillero;
    }

    public function setPresupuesto(\Garbodor\PresupuestoBundle\Entity\Presupuesto $presupuesto)
    {
        $this->presupuesto = $presupuesto;
    
        return $this;
    }

    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    /**
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     * @return Casillero
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;
    
        return $this;
    }

    /**
     * Get fechaAsignacion
     *
     * @return \DateTime 
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }
}
