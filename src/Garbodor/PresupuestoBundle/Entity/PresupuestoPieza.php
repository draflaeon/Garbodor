<?php

namespace Garbodor\PresupuestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoPieza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PresupuestoPieza
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\PresupuestoBundle\Entity\Presupuesto")
     */
    private $presupuesto;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\ListaPieza")
     */
    private $pieza;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_pieza", type="integer")
     */
    private $cantidadPieza;


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

    public function setPieza(\Garbodor\MotorBundle\Entity\ListaPieza $pieza)
    {
        $this->pieza = $pieza;
    
        return $this;
    }

    public function getPieza()
    {
        return $this->pieza;
    }

    /**
     * Set cantidadPieza
     *
     * @param integer $cantidadPieza
     * @return PresupuestoPieza
     */
    public function setCantidadPieza($cantidadPieza)
    {
        $this->cantidadPieza = $cantidadPieza;
    
        return $this;
    }

    /**
     * Get cantidadPieza
     *
     * @return integer 
     */
    public function getCantidadPieza()
    {
        return $this->cantidadPieza;
    }
}
