<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repuesto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Repuesto
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
     * @ORM\Column(name="nombre_repuesto", type="string", length=255)
     */
    private $nombreRepuesto;


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
     * Set nombreRepuesto
     *
     * @param string $nombreRepuesto
     * @return Repuesto
     */
    public function setNombreRepuesto($nombreRepuesto)
    {
        $this->nombreRepuesto = $nombreRepuesto;
    
        return $this;
    }

    /**
     * Get nombreRepuesto
     *
     * @return string 
     */
    public function getNombreRepuesto()
    {
        return $this->nombreRepuesto;
    }
}