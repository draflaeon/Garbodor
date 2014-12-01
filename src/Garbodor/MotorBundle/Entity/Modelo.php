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
     * @ORM\Column(name="modelo_nombre", type="string", length=255)
     */
    private $modeloNombre;


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
     * Set marca
     *
     * @param string $marca
     * @return Modelo
     */
    public function setMarca(\Garbodor\MotorBundle\Entity\Marca $marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modeloNombre
     *
     * @param string $modeloNombre
     * @return Modelo
     */
    public function setModeloNombre($modeloNombre)
    {
        $this->modeloNombre = $modeloNombre;
    
        return $this;
    }

    /**
     * Get modeloNombre
     *
     * @return string 
     */
    public function getModeloNombre()
    {
        return $this->modeloNombre;
    }
    
    public function __toString()
    {
        return $this->getModeloNombre();
    }
}
