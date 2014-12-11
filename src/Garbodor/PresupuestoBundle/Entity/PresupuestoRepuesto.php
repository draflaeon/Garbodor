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
     * @ORM\Column(name="repuesto", type="string", length=255)
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

    /**
     * Set presupuesto
     *
     * @param string $presupuesto
     * @return PresupuestoRepuesto
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
     * Set repuesto
     *
     * @param string $repuesto
     * @return PresupuestoRepuesto
     */
    public function setRepuesto($repuesto)
    {
        $this->repuesto = $repuesto;
    
        return $this;
    }

    /**
     * Get repuesto
     *
     * @return string 
     */
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
