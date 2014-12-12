<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Modelo
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
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\Marca")
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modelo", type="string", length=255)
     */
    private $nombreModelo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setMarca(\Garbodor\MotorBundle\Entity\Marca $marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set nombreModelo
     *
     * @param string $nombreModelo
     * @return Modelo
     */
    public function setNombreModelo($nombreModelo)
    {
        $this->nombreModelo = $nombreModelo;
    
        return $this;
    }

    /**
     * Get nombreModelo
     *
     * @return string 
     */
    public function getNombreModelo()
    {
        return $this->nombreModelo;
    }

    public function __toString()
    {
        return $this->nombreModelo;
    }
}
