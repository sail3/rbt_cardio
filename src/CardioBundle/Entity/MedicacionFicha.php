<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedicacionFicha
 *
 * @ORM\Table(name="medicacion_has_ficha")
 * @ORM\Entity
 */
class MedicacionFicha
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Ficha")
     * @ORM\Column(name="idficha")
     */
    private $idFicha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Medicacion")
     * @ORM\Column(name="idmedicacion_alta")
     */
    private $idMedicacion;

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
     * @return MedicacionFicha
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
     * @return MedicacionFicha
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
     * Set medicacion
     *
     * @param \CardioBundle\Entity\Medicacion $medicacion
     * @return MedicacionFicha
     */
    public function setMedicacion(\CardioBundle\Entity\Medicacion $medicacion)
    {
        $this->medicacion = $medicacion;

        return $this;
    }

    /**
     * Get medicacion
     *
     * @return \CardioBundle\Entity\Medicacion
     */
    public function getMedicacion()
    {
        return $this->medicacion;
    }

    /**
     * Set idFicha
     *
     * @param \CardioBundle\Entity\Ficha $idFicha
     * @return MedicacionFicha
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
     * Set idMedicacion
     *
     * @param \CardioBundle\Entity\Medicacion $idMedicacion
     * @return MedicacionFicha
     */
    public function setIdMedicacion(\CardioBundle\Entity\Medicacion $idMedicacion)
    {
        $this->idMedicacion = $idMedicacion;

        return $this;
    }

    /**
     * Get idMedicacion
     *
     * @return \CardioBundle\Entity\Medicacion
     */
    public function getIdMedicacion()
    {
        return $this->idMedicacion;
    }
}
