<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evolucion
 *
 * @ORM\Table(name="evolucion", indexes={@ORM\Index(name="fk_estado_evolutivo_has_ficha_estado_evolutivo1_idx", columns={"idestado_evolutivo"})})
 * @ORM\Entity
 */
class Evolucion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_evaluacion", type="datetime", nullable=true)
     */
    private $fechaEvaluacion;

    /**
     * @var \EstadoEvolutivo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="EstadoEvolutivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestado_evolutivo", referencedColumnName="idestado_evolutivo")
     * })
     */
    private $idestadoEvolutivo;



    /**
     * Set fechaEvaluacion
     *
     * @param \DateTime $fechaEvaluacion
     *
     * @return Evolucion
     */
    public function setFechaEvaluacion($fechaEvaluacion)
    {
        $this->fechaEvaluacion = $fechaEvaluacion;

        return $this;
    }

    /**
     * Get fechaEvaluacion
     *
     * @return \DateTime
     */
    public function getFechaEvaluacion()
    {
        return $this->fechaEvaluacion;
    }

    /**
     * Set idestadoEvolutivo
     *
     * @param \BackendBundle\Entity\EstadoEvolutivo $idestadoEvolutivo
     *
     * @return Evolucion
     */
    public function setIdestadoEvolutivo(\BackendBundle\Entity\EstadoEvolutivo $idestadoEvolutivo)
    {
        $this->idestadoEvolutivo = $idestadoEvolutivo;

        return $this;
    }

    /**
     * Get idestadoEvolutivo
     *
     * @return \BackendBundle\Entity\EstadoEvolutivo
     */
    public function getIdestadoEvolutivo()
    {
        return $this->idestadoEvolutivo;
    }
}
