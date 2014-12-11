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
     * @ORM\Column(name="pieza", type="string", length=255)
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

    /**
     * Set presupuesto
     *
     * @param string $presupuesto
     * @return PresupuestoPieza
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
     * Set pieza
     *
     * @param string $pieza
     * @return PresupuestoPieza
     */
    public function setPieza($pieza)
    {
        $this->pieza = $pieza;
    
        return $this;
    }

    /**
     * Get pieza
     *
     * @return string 
     */
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
