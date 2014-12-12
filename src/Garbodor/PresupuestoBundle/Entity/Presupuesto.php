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
     *
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\Motor")
     */
    private $motor;

    /**
     * @var string
     *
     * @ORM\Column(name="r_presupuesto", type="string", length=255)
     */
    private $rPresupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_presupuesto", type="string", length=100)
     */
    private $estadoPresupuesto;

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
     * @ORM\Column(name="total_presupuesto", type="integer")
     */
    private $totalPresupuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_trabajo", type="integer")
     */
    private $totalTrabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_repuesto", type="integer")
     */
    private $totalRepuesto;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setMotor(\Garbodor\MotorBundle\Entity\Modelo $motor)
    {
        $this->motor = $motor;
    
        return $this;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set rPresupuesto
     *
     * @param string $rPresupuesto
     * @return Presupuesto
     */
    public function setRPresupuesto($rPresupuesto)
    {
        $this->rPresupuesto = $rPresupuesto;
    
        return $this;
    }

    /**
     * Get rPresupuesto
     *
     * @return string 
     */
    public function getRPresupuesto()
    {
        return $this->rPresupuesto;
    }

    /**
     * Set estadoPresupuesto
     *
     * @param string $estadoPresupuesto
     * @return Presupuesto
     */
    public function setEstadoPresupuesto($estadoPresupuesto)
    {
        $this->estadoPresupuesto = $estadoPresupuesto;
    
        return $this;
    }

    /**
     * Get estadoPresupuesto
     *
     * @return string 
     */
    public function getEstadoPresupuesto()
    {
        return $this->estadoPresupuesto;
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
     * Set totalPresupuesto
     *
     * @param integer $totalPresupuesto
     * @return Presupuesto
     */
    public function setTotalPresupuesto($totalPresupuesto)
    {
        $this->totalPresupuesto = $totalPresupuesto;
    
        return $this;
    }

    /**
     * Get totalPresupuesto
     *
     * @return integer 
     */
    public function getTotalPresupuesto()
    {
        return $this->totalPresupuesto;
    }

    /**
     * Set totalTrabajo
     *
     * @param integer $totalTrabajo
     * @return Presupuesto
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

    /**
     * Set totalRepuesto
     *
     * @param integer $totalRepuesto
     * @return Presupuesto
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
}
