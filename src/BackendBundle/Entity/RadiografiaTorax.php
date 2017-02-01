<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RadiografiaTorax
 *
 * @ORM\Table(name="radiografia_torax", indexes={@ORM\Index(name="fk_rx_torax_has_ficha_rx_torax1_idx", columns={"idrx_torax"})})
 * @ORM\Entity
 */
class RadiografiaTorax
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var \CriteriosRadiografia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CriteriosRadiografia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrx_torax", referencedColumnName="idrx_torax")
     * })
     */
    private $idrxTorax;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return RadiografiaTorax
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
     * Set idrxTorax
     *
     * @param \BackendBundle\Entity\CriteriosRadiografia $idrxTorax
     *
     * @return RadiografiaTorax
     */
    public function setIdrxTorax(\BackendBundle\Entity\CriteriosRadiografia $idrxTorax)
    {
        $this->idrxTorax = $idrxTorax;

        return $this;
    }

    /**
     * Get idrxTorax
     *
     * @return \BackendBundle\Entity\CriteriosRadiografia
     */
    public function getIdrxTorax()
    {
        return $this->idrxTorax;
    }
}
