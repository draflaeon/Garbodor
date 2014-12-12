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
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\PresupuestoBundle\Entity\Presupuesto")
     */
    private $presupuesto;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\RecepcionBundle\Entity\Cliente")
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

    public function setPresupuesto(\Garbodor\PresupuestoBundle\Entity\Presupuesto $presupuesto)
    {
        $this->presupuesto = $presupuesto;
    
        return $this;
    }

    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    public function setCliente(\Garbodor\RecepcionBundle\Entity\Cliente $cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

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
