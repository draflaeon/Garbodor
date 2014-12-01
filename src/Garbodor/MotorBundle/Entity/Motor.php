<?php

namespace Garbodor\MotorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Motor
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
     * @ORM\Column(name="serie", type="string", length=255)
     */
    private $serie;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Garbodor\MotorBundle\Entity\Modelo")
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_motor", type="string", length=2)
     */
    private $tipoMotor;


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
     * Set serie
     *
     * @param string $serie
     * @return Motor
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
    
        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Motor
     */
    public function setModelo(\Garbodor\MotorBundle\Entity\Modelo $modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set tipoMotor
     *
     * @param string $tipoMotor
     * @return Motor
     */
    public function setTipoMotor($tipoMotor)
    {
        $this->tipoMotor = $tipoMotor;
    
        return $this;
    }

    /**
     * Get tipoMotor
     *
     * @return string 
     */
    public function getTipoMotor()
    {
        return $this->tipoMotor;
    }
    
    public function __toString()
    {
        return $this->getSerie();
    }
}
