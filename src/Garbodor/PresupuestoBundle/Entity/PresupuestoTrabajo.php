<?php

namespace Garbodor\PresupuestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoTrabajo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PresupuestoTrabajo
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\PresupuestoBundle\Entity\Presupuesto")
     */
    private $presupuesto;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\ListaTrabajo")
     */
    private $trabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_trabajo", type="integer")
     */
    private $cantidadTrabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_trabajo", type="integer")
     */
    private $totalTrabajo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
     * Set cantidadTrabajo
     *
     * @param integer $cantidadTrabajo
     * @return PresupuestoTrabajo
     */
    public function setCantidadTrabajo($cantidadTrabajo)
    {
        $this->cantidadTrabajo = $cantidadTrabajo;
    
        return $this;
    }

    /**
     * Get cantidadTrabajo
     *
     * @return integer 
     */
    public function getCantidadTrabajo()
    {
        return $this->cantidadTrabajo;
    }

    /**
     * Set totalTrabajo
     *
     * @param integer $totalTrabajo
     * @return PresupuestoTrabajo
     */
    public function setTotalTrabajo($totalTrabajo)
    {
        $this->totalTrabajo = $totalTrabajo;
    
        return $this;
    }

    /**
     * Get totalTrabajo
     *
     * @return integer 
     */
    public function getTotalTrabajo()
    {
        return $this->totalTrabajo;
    }
}
