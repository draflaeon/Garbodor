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
     * @ORM\Column(name="presupuesto", type="string", length=255)
     */
    private $presupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="trabajo", type="string", length=255)
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

    /**
     * Set presupuesto
     *
     * @param string $presupuesto
     * @return PresupuestoTrabajo
     */
    public function setPresupuesto($presupuesto)
    {
        $this->presupuesto = $presupuesto;
    
        return $this;
    }

    /**
     * Get presupuesto
     *
     * @return string 
     */
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    /**
     * Set trabajo
     *
     * @param string $trabajo
     * @return PresupuestoTrabajo
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;
    
        return $this;
    }

    /**
     * Get trabajo
     *
     * @return string 
     */
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
