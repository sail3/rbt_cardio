<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoRiesgo
 *
 * @ORM\Table(name="grupo_riesgo", indexes={@ORM\Index(name="fk_factor_riesgo_has_ficha_factor_riesgo_idx", columns={"idfactor_riesgo"})})
 * @ORM\Entity
 */
class GrupoRiesgo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var \FactorRiesgo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FactorRiesgo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfactor_riesgo", referencedColumnName="idfactor_riesgo")
     * })
     */
    private $idfactorRiesgo;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return GrupoRiesgo
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
     * Set idfactorRiesgo
     *
     * @param \BackendBundle\Entity\FactorRiesgo $idfactorRiesgo
     *
     * @return GrupoRiesgo
     */
    public function setIdfactorRiesgo(\BackendBundle\Entity\FactorRiesgo $idfactorRiesgo)
    {
        $this->idfactorRiesgo = $idfactorRiesgo;

        return $this;
    }

    /**
     * Get idfactorRiesgo
     *
     * @return \BackendBundle\Entity\FactorRiesgo
     */
    public function getIdfactorRiesgo()
    {
        return $this->idfactorRiesgo;
    }
}
