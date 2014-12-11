<?php

namespace Garbodor\PresupuestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoCliente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PresupuestoCliente
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
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_cliente", type="integer")
     */
    private $tipoCliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pago", type="datetime")
     */
    private $fechaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=150)
     */
    private $estado;


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
     * @return PresupuestoCliente
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
     * Set cliente
     *
     * @param string $cliente
     * @return PresupuestoCliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set tipoCliente
     *
     * @param integer $tipoCliente
     * @return PresupuestoCliente
     */
    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    
        return $this;
    }

    /**
     * Get tipoCliente
     *
     * @return integer 
     */
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return PresupuestoCliente
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;
    
        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return PresupuestoCliente
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
