<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedicacionHospitalizacion
 *
 * @ORM\Table(name="medicacion_hospitalizacion", indexes={@ORM\Index(name="fk_medicacion_has_ficha_medicacion1_idx", columns={"idmedicacion"})})
 * @ORM\Entity
 */
class MedicacionHospitalizacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Medicamentos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Medicamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmedicacion", referencedColumnName="idmedicacion")
     * })
     */
    private $idmedicacion;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return MedicacionHospitalizacion
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
     * Set idmedicacion
     *
     * @param \BackendBundle\Entity\Medicamentos $idmedicacion
     *
     * @return MedicacionHospitalizacion
     */
    public function setIdmedicacion(\BackendBundle\Entity\Medicamentos $idmedicacion)
    {
        $this->idmedicacion = $idmedicacion;

        return $this;
    }

    /**
     * Get idmedicacion
     *
     * @return \BackendBundle\Entity\Medicamentos
     */
    public function getIdmedicacion()
    {
        return $this->idmedicacion;
    }
}
