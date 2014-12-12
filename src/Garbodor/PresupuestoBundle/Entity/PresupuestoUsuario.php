<?php

namespace Garbodor\PresupuestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoUsuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PresupuestoUsuario
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\PresupuestoBundle\Entity\Presupuesto")
     */
    private $presupuesto;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Garbodor\RecepcionBundle\Entity\Usuario")
     */
    private $usuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime")
     */
    private $fechaModificacion;


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

    public function setUsuario(\Garbodor\RecepcionBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return PresupuestoUsuario
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    
        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
}
