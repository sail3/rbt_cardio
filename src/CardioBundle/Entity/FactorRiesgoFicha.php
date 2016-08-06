<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FactorRiesgoFicha
 *
 * @ORM\Table(name="factor_riesgo_has_ficha")
 * @ORM\Entity
 */
class FactorRiesgoFicha
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Ficha")
     * @ORM\Column(name="idficha")
     */
    private $idFicha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="FactorRiesgo")
     * @ORM\Column(name="idfactor_riesgo")
     */
    private $idFactorRiesgo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FactorRiesgoFicha
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ficha
     *
     * @param \CardioBundle\Entity\Ficha $ficha
     * @return FactorRiesgoFicha
     */
    public function setFicha(\CardioBundle\Entity\Ficha $ficha)
    {
        $this->ficha = $ficha;

        return $this;
    }

    /**
     * Get ficha
     *
     * @return \CardioBundle\Entity\Ficha
     */
    public function getFicha()
    {
        return $this->ficha;
    }

    /**
     * Set factorRiesgo
     *
     * @param \CardioBundle\Entity\FactorRiesgo $factorRiesgo
     * @return FactorRiesgoFicha
     */
    public function setFactorRiesgo(\CardioBundle\Entity\FactorRiesgo $factorRiesgo)
    {
        $this->factorRiesgo = $factorRiesgo;

        return $this;
    }

    /**
     * Get factorRiesgo
     *
     * @return \CardioBundle\Entity\FactorRiesgo
     */
    public function getFactorRiesgo()
    {
        return $this->factorRiesgo;
    }

    /**
     * Set idFicha
     *
     * @param \CardioBundle\Entity\Ficha $idFicha
     * @return FactorRiesgoFicha
     */
    public function setIdFicha(\CardioBundle\Entity\Ficha $idFicha)
    {
        $this->idFicha = $idFicha;

        return $this;
    }

    /**
     * Get idFicha
     *
     * @return \CardioBundle\Entity\Ficha
     */
    public function getIdFicha()
    {
        return $this->idFicha;
    }

    /**
     * Set idFactorRiesgo
     *
     * @param \CardioBundle\Entity\FactorRiesgo $idFactorRiesgo
     * @return FactorRiesgoFicha
     */
    public function setIdFactorRiesgo(\CardioBundle\Entity\FactorRiesgo $idFactorRiesgo)
    {
        $this->idFactorRiesgo = $idFactorRiesgo;

        return $this;
    }

    /**
     * Get idFactorRiesgo
     *
     * @return \CardioBundle\Entity\FactorRiesgo
     */
    public function getIdFactorRiesgo()
    {
        return $this->idFactorRiesgo;
    }
}
