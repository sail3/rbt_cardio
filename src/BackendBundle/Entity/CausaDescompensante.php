<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CausaDescompensante
 *
 * @ORM\Table(name="causa_descompensante", indexes={@ORM\Index(name="fk_causa_descompensante_ficha1_idx", columns={"id_ficha"}), @ORM\Index(name="fk_causa_descompensante_descompensacion1_idx", columns={"id_descompensacion"})})
 * @ORM\Entity
 */
class CausaDescompensante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_causa_descompensante", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausaDescompensante;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Descompensacion
     *
     * @ORM\ManyToOne(targetEntity="Descompensacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_descompensacion", referencedColumnName="id_descompensacion")
     * })
     */
    private $idDescompensacion;

    /**
     * @var \Ficha
     *
     * @ORM\ManyToOne(targetEntity="Ficha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ficha", referencedColumnName="id_ficha")
     * })
     */
    private $idFicha;



    /**
     * Get idCausaDescompensante
     *
     * @return integer
     */
    public function getIdCausaDescompensante()
    {
        return $this->idCausaDescompensante;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return CausaDescompensante
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
     * Set idDescompensacion
     *
     * @param \BackendBundle\Entity\Descompensacion $idDescompensacion
     *
     * @return CausaDescompensante
     */
    public function setIdDescompensacion(\BackendBundle\Entity\Descompensacion $idDescompensacion = null)
    {
        $this->idDescompensacion = $idDescompensacion;

        return $this;
    }

    /**
     * Get idDescompensacion
     *
     * @return \BackendBundle\Entity\Descompensacion
     */
    public function getIdDescompensacion()
    {
        return $this->idDescompensacion;
    }

    /**
     * Set idFicha
     *
     * @param \BackendBundle\Entity\Ficha $idFicha
     *
     * @return CausaDescompensante
     */
    public function setIdFicha(\BackendBundle\Entity\Ficha $idFicha = null)
    {
        $this->idFicha = $idFicha;

        return $this;
    }

    /**
     * Get idFicha
     *
     * @return \BackendBundle\Entity\Ficha
     */
    public function getIdFicha()
    {
        return $this->idFicha;
    }
}
