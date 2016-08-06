<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxToraxFicha
 *
 * @ORM\Table(name="rx_torax_has_ficha")
 * @ORM\Entity
 */
class RxToraxFicha
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Ficha")
     * @ORM\Column(name="idficha")
     */
    private $idFicha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="RxTorax")
     * @ORM\Column(name="idrx_torax")
     */
    private $idRxTorax;

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
     * @return RxToraxFicha
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
     * Set idFicha
     *
     * @param \CardioBundle\Entity\Ficha $idFicha
     * @return RxToraxFicha
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
     * Set idRxTorax
     *
     * @param \CardioBundle\Entity\RxTorax $idRxTorax
     * @return RxToraxFicha
     */
    public function setIdRxTorax(\CardioBundle\Entity\RxTorax $idRxTorax)
    {
        $this->idRxTorax = $idRxTorax;

        return $this;
    }

    /**
     * Get idRxTorax
     *
     * @return \CardioBundle\Entity\RxTorax
     */
    public function getIdRxTorax()
    {
        return $this->idRxTorax;
    }
}
