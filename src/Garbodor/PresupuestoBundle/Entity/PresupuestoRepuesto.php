<?php

namespace Garbodor\PresupuestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoRepuesto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PresupuestoRepuesto
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\PresupuestoBundle\Entity\Presupuesto")
     */
    private $presupuesto;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\ListaRepuesto")
     */
    private $repuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_repuesto", type="integer")
     */
    private $cantidadRepuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_repuesto", type="integer")
     */
    private $totalRepuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="trae_repuesto", type="string", length=10)
     */
    private $traeRepuesto;


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

    public function setRepuesto(\Garbodor\MotorBundle\Entity\ListaRepuesto $repuesto)
    {
        $this->repuesto = $repuesto;
    
        return $this;
    }

    public function getRepuesto()
    {
        return $this->repuesto;
    }

    /**
     * Set cantidadRepuesto
     *
     * @param integer $cantidadRepuesto
     * @return PresupuestoRepuesto
     */
    public function setCantidadRepuesto($cantidadRepuesto)
    {
        $this->cantidadRepuesto = $cantidadRepuesto;
    
        return $this;
    }

    /**
     * Get cantidadRepuesto
     *
     * @return integer 
     */
    public function getCantidadRepuesto()
    {
        return $this->cantidadRepuesto;
    }

    /**
     * Set totalRepuesto
     *
     * @param integer $totalRepuesto
     * @return PresupuestoRepuesto
     */
    public function setTotalRepuesto($totalRepuesto)
    {
        $this->totalRepuesto = $totalRepuesto;
    
        return $this;
    }

    /**
     * Get totalRepuesto
     *
     * @return integer 
     */
    public function getTotalRepuesto()
    {
        return $this->totalRepuesto;
    }

    /**
     * Set traeRepuesto
     *
     * @param string $traeRepuesto
     * @return PresupuestoRepuesto
     */
    public function setTraeRepuesto($traeRepuesto)
    {
        $this->traeRepuesto = $traeRepuesto;
    
        return $this;
    }

    /**
     * Get traeRepuesto
     *
     * @return string 
     */
    public function getTraeRepuesto()
    {
        return $this->traeRepuesto;
    }
}
