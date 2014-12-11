<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoTrabajo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GrupoTrabajo
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
     * @ORM\Column(name="nombre_grupo_trabajo", type="string", length=150)
     */
    private $nombreGrupoTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_grupo", type="text")
     */
    private $descripcionGrupo;


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
     * Set nombreGrupoTrabajo
     *
     * @param string $nombreGrupoTrabajo
     * @return GrupoTrabajo
     */
    public function setNombreGrupoTrabajo($nombreGrupoTrabajo)
    {
        $this->nombreGrupoTrabajo = $nombreGrupoTrabajo;
    
        return $this;
    }

    /**
     * Get nombreGrupoTrabajo
     *
     * @return string 
     */
    public function getNombreGrupoTrabajo()
    {
        return $this->nombreGrupoTrabajo;
    }

    /**
     * Set descripcionGrupo
     *
     * @param string $descripcionGrupo
     * @return GrupoTrabajo
     */
    public function setDescripcionGrupo($descripcionGrupo)
    {
        $this->descripcionGrupo = $descripcionGrupo;
    
        return $this;
    }

    /**
     * Get descripcionGrupo
     *
     * @return string 
     */
    public function getDescripcionGrupo()
    {
        return $this->descripcionGrupo;
    }
}
