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
     * @ORM\Column(name="modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="serie_motor", type="string", length=255)
     */
    private $serieMotor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=5)
     */
    private $tipo;


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
     * Set modelo
     *
     * @param string $modelo
     * @return Motor
     */
    public function setModelo($modelo)
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
     * Set serieMotor
     *
     * @param string $serieMotor
     * @return Motor
     */
    public function setSerieMotor($serieMotor)
    {
        $this->serieMotor = $serieMotor;
    
        return $this;
    }

    /**
     * Get serieMotor
     *
     * @return string 
     */
    public function getSerieMotor()
    {
        return $this->serieMotor;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Motor
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
