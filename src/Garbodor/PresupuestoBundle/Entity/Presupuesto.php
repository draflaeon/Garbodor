<?php

namespace Garbodor\PresupuestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presupuesto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Presupuesto
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
     * @ORM\Column(name="presupuesto_r", type="string", length=255)
     */
    private $presupuestoR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrega", type="date")
     */
    private $fechaEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_entrega", type="time")
     */
    private $horaEntrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_pago", type="integer")
     */
    private $totalPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_repuestos", type="integer")
     */
    private $totalRepuestos;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_rectificados", type="integer")
     */
    private $totalRectificados;


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
     * Set presupuestoR
     *
     * @param string $presupuestoR
     * @return Presupuesto
     */
    public function setPresupuestoR($presupuestoR)
    {
        $this->presupuestoR = $presupuestoR;
    
        return $this;
    }

    /**
     * Get presupuestoR
     *
     * @return string 
     */
    public function getPresupuestoR()
    {
        return $this->presupuestoR;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Presupuesto
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Presupuesto
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;
    
        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set horaEntrega
     *
     * @param \DateTime $horaEntrega
     * @return Presupuesto
     */
    public function setHoraEntrega($horaEntrega)
    {
        $this->horaEntrega = $horaEntrega;
    
        return $this;
    }

    /**
     * Get horaEntrega
     *
     * @return \DateTime 
     */
    public function getHoraEntrega()
    {
        return $this->horaEntrega;
    }

    /**
     * Set totalPago
     *
     * @param integer $totalPago
     * @return Presupuesto
     */
    public function setTotalPago($totalPago)
    {
        $this->totalPago = $totalPago;
    
        return $this;
    }

    /**
     * Get totalPago
     *
     * @return integer 
     */
    public function getTotalPago()
    {
        return $this->totalPago;
    }

    /**
     * Set totalRepuestos
     *
     * @param integer $totalRepuestos
     * @return Presupuesto
     */
    public function setTotalRepuestos($totalRepuestos)
    {
        $this->totalRepuestos = $totalRepuestos;
    
        return $this;
    }

    /**
     * Get totalRepuestos
     *
     * @return integer 
     */
    public function getTotalRepuestos()
    {
        return $this->totalRepuestos;
    }

    /**
     * Set totalRectificados
     *
     * @param integer $totalRectificados
     * @return Presupuesto
     */
    public function setTotalRectificados($totalRectificados)
    {
        $this->totalRectificados = $totalRectificados;
    
        return $this;
    }

    /**
     * Get totalRectificados
     *
     * @return integer 
     */
    public function getTotalRectificados()
    {
        return $this->totalRectificados;
    }
}
