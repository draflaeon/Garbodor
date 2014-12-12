<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoPieza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GrupoPieza
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
     * @ORM\Column(name="nombre_grupo_pieza", type="string", length=150)
     */
    private $nombreGrupoPieza;

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
     * Set nombreGrupoPieza
     *
     * @param string $nombreGrupoPieza
     * @return GrupoPieza
     */
    public function setNombreGrupoPieza($nombreGrupoPieza)
    {
        $this->nombreGrupoPieza = $nombreGrupoPieza;
    
        return $this;
    }

    /**
     * Get nombreGrupoPieza
     *
     * @return string 
     */
    public function getNombreGrupoPieza()
    {
        return $this->nombreGrupoPieza;
    }

    /**
     * Set descripcionGrupo
     *
     * @param string $descripcionGrupo
     * @return GrupoPieza
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

    public function __toString()
    {
        return $this->nombreGrupoPieza;
    }
}
