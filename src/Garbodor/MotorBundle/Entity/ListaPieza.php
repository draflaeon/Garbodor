<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaPieza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ListaPieza
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
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\GrupoPieza")
     */
    private $grupoPieza;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_pieza", type="string", length=150)
     */
    private $nombrePieza;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setGrupoPieza(\Garbodor\MotorBundle\Entity\GrupoPieza $grupoPieza)
    {
        $this->grupoPieza = $grupoPieza;
    
        return $this;
    }

    public function getGrupoPieza()
    {
        return $this->grupoPieza;
    }

    /**
     * Set nombrePieza
     *
     * @param string $nombrePieza
     * @return ListaPieza
     */
    public function setNombrePieza($nombrePieza)
    {
        $this->nombrePieza = $nombrePieza;
    
        return $this;
    }

    /**
     * Get nombrePieza
     *
     * @return string 
     */
    public function getNombrePieza()
    {
        return $this->nombrePieza;
    }
}
