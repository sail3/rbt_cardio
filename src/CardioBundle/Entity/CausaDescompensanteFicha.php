<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CausaDescompensanteFicha
 *
 * @ORM\Table(name="causa_descompensante_has_ficha")
 * @ORM\Entity
 */
class CausaDescompensanteFicha
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Ficha")
     * @ORM\Column(name="idficha")
     */
    private $idFicha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="CausaDescompensante")
     * @ORM\Column(name="idcausa_descompensante")
     */
    private $idCausaDescompensante;

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
     * @return CausaDescompensanteFicha
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
     * @return CausaDescompensanteFicha
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
     * Set CausaDescompensante
     *
     * @param \CardioBundle\Entity\CausaDescompensante $causaDescompensante
     * @return CausaDescompensanteFicha
     */
    public function setCausaDescompensante(\CardioBundle\Entity\CausaDescompensante $causaDescompensante)
    {
        $this->CausaDescompensante = $causaDescompensante;

        return $this;
    }

    /**
     * Get CausaDescompensante
     *
     * @return \CardioBundle\Entity\CausaDescompensante
     */
    public function getCausaDescompensante()
    {
        return $this->CausaDescompensante;
    }

    /**
     * Set idFicha
     *
     * @param \CardioBundle\Entity\Ficha $idFicha
     * @return CausaDescompensanteFicha
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
     * Set idCausaDescompensante
     *
     * @param \CardioBundle\Entity\CausaDescompensante $idCausaDescompensante
     * @return CausaDescompensanteFicha
     */
    public function setIdCausaDescompensante(\CardioBundle\Entity\CausaDescompensante $idCausaDescompensante)
    {
        $this->idCausaDescompensante = $idCausaDescompensante;

        return $this;
    }

    /**
     * Get idCausaDescompensante
     *
     * @return \CardioBundle\Entity\CausaDescompensante
     */
    public function getIdCausaDescompensante()
    {
        return $this->idCausaDescompensante;
    }
}
