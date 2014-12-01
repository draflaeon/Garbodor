<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Marca
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
     * @ORM\Column(name="marca_nombre", type="string", length=255)
     */
    private $marcaNombre;


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
     * Set marcaNombre
     *
     * @param string $marcaNombre
     * @return Marca
     */
    public function setMarcaNombre($marcaNombre)
    {
        $this->marcaNombre = $marcaNombre;
    
        return $this;
    }

    /**
     * Get marcaNombre
     *
     * @return string 
     */
    public function getMarcaNombre()
    {
        return $this->marcaNombre;
    }
    
    public function __toString()
    {
        return $this->getMarcaNombre();
    }
}
