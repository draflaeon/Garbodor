<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaTrabajo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ListaTrabajo
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
     * @ORM\Column(name="grupo_trabajo", type="string", length=255)
     */
    private $grupoTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_trabajo", type="string", length=150)
     */
    private $nombreTrabajo;


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
     * Set grupoTrabajo
     *
     * @param string $grupoTrabajo
     * @return ListaTrabajo
     */
    public function setGrupoTrabajo($grupoTrabajo)
    {
        $this->grupoTrabajo = $grupoTrabajo;
    
        return $this;
    }

    /**
     * Get grupoTrabajo
     *
     * @return string 
     */
    public function getGrupoTrabajo()
    {
        return $this->grupoTrabajo;
    }

    /**
     * Set nombreTrabajo
     *
     * @param string $nombreTrabajo
     * @return ListaTrabajo
     */
    public function setNombreTrabajo($nombreTrabajo)
    {
        $this->nombreTrabajo = $nombreTrabajo;
    
        return $this;
    }

    /**
     * Get nombreTrabajo
     *
     * @return string 
     */
    public function getNombreTrabajo()
    {
        return $this->nombreTrabajo;
    }
}
