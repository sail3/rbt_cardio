<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriaClinica
 *
 * @ORM\Table(name="historia_clinica", indexes={@ORM\Index(name="fk_historia_clinica_ficha1_idx", columns={"idficha"}), @ORM\Index(name="fk_historia_clinica_paciente1_idx", columns={"paciente_idpaciente"})})
 * @ORM\Entity
 */
class HistoriaClinica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhistoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idhistoria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transfusion_sanguinea", type="boolean", nullable=true)
     */
    private $transfusionSanguinea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asiste_controles", type="boolean", nullable=true)
     */
    private $asisteControles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro_hospitalizaciones", type="integer", nullable=true)
     */
    private $nroHospitalizaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $peso;

    /**
     * @var string
     *
     * @ORM\Column(name="talla", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $talla;

    /**
     * @var string
     *
     * @ORM\Column(name="tfg", type="string", length=45, nullable=true)
     */
    private $tfg;

    /**
     * @var \Ficha
     *
     * @ORM\ManyToOne(targetEntity="Ficha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idficha", referencedColumnName="idficha")
     * })
     */
    private $idficha;

    /**
     * @var \Paciente
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paciente_idpaciente", referencedColumnName="idpaciente")
     * })
     */
    private $pacientepaciente;



    /**
     * Set idhistoria
     *
     * @param integer $idhistoria
     * @return HistoriaClinica
     */
    public function setIdhistoria($idhistoria)
    {
        $this->idhistoria = $idhistoria;

        return $this;
    }

    /**
     * Get idhistoria
     *
     * @return integer 
     */
    public function getIdhistoria()
    {
        return $this->idhistoria;
    }

    /**
     * Set transfusionSanguinea
     *
     * @param boolean $transfusionSanguinea
     * @return HistoriaClinica
     */
    public function setTransfusionSanguinea($transfusionSanguinea)
    {
        $this->transfusionSanguinea = $transfusionSanguinea;

        return $this;
    }

    /**
     * Get transfusionSanguinea
     *
     * @return boolean 
     */
    public function getTransfusionSanguinea()
    {
        return $this->transfusionSanguinea;
    }

    /**
     * Set asisteControles
     *
     * @param boolean $asisteControles
     * @return HistoriaClinica
     */
    public function setAsisteControles($asisteControles)
    {
        $this->asisteControles = $asisteControles;

        return $this;
    }

    /**
     * Get asisteControles
     *
     * @return boolean 
     */
    public function getAsisteControles()
    {
        return $this->asisteControles;
    }

    /**
     * Set nroHospitalizaciones
     *
     * @param integer $nroHospitalizaciones
     * @return HistoriaClinica
     */
    public function setNroHospitalizaciones($nroHospitalizaciones)
    {
        $this->nroHospitalizaciones = $nroHospitalizaciones;

        return $this;
    }

    /**
     * Get nroHospitalizaciones
     *
     * @return integer 
     */
    public function getNroHospitalizaciones()
    {
        return $this->nroHospitalizaciones;
    }

    /**
     * Set peso
     *
     * @param string $peso
     * @return HistoriaClinica
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set talla
     *
     * @param string $talla
     * @return HistoriaClinica
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    /**
     * Get talla
     *
     * @return string 
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set tfg
     *
     * @param string $tfg
     * @return HistoriaClinica
     */
    public function setTfg($tfg)
    {
        $this->tfg = $tfg;

        return $this;
    }

    /**
     * Get tfg
     *
     * @return string 
     */
    public function getTfg()
    {
        return $this->tfg;
    }

    /**
     * Set idficha
     *
     * @param \CardioBundle\Entity\Ficha $idficha
     * @return HistoriaClinica
     */
    public function setIdficha(\CardioBundle\Entity\Ficha $idficha = null)
    {
        $this->idficha = $idficha;

        return $this;
    }

    /**
     * Get idficha
     *
     * @return \CardioBundle\Entity\Ficha 
     */
    public function getIdficha()
    {
        return $this->idficha;
    }

    /**
     * Set pacientepaciente
     *
     * @param \CardioBundle\Entity\Paciente $pacientepaciente
     * @return HistoriaClinica
     */
    public function setPacientepaciente(\CardioBundle\Entity\Paciente $pacientepaciente)
    {
        $this->pacientepaciente = $pacientepaciente;

        return $this;
    }

    /**
     * Get pacientepaciente
     *
     * @return \CardioBundle\Entity\Paciente 
     */
    public function getPacientepaciente()
    {
        return $this->pacientepaciente;
    }
}
