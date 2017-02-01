<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriaClinica
 *
 * @ORM\Table(name="historia_clinica", uniqueConstraints={@ORM\UniqueConstraint(name="paciente_idpaciente_UNIQUE", columns={"idpaciente"})}, indexes={@ORM\Index(name="fk_historia_clinica_paciente1_idx", columns={"idpaciente"})})
 * @ORM\Entity
 */
class HistoriaClinica
{
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
     * @var \Paciente
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpaciente", referencedColumnName="idpaciente")
     * })
     */
    private $idpaciente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medicamentos", mappedBy="idpaciente")
     */
    private $idmedicacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmedicacion = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set transfusionSanguinea
     *
     * @param boolean $transfusionSanguinea
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     * Set idpaciente
     *
     * @param \BackendBundle\Entity\Paciente $idpaciente
     *
     * @return HistoriaClinica
     */
    public function setIdpaciente(\BackendBundle\Entity\Paciente $idpaciente)
    {
        $this->idpaciente = $idpaciente;

        return $this;
    }

    /**
     * Get idpaciente
     *
     * @return \BackendBundle\Entity\Paciente
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }

    /**
     * Add idmedicacion
     *
     * @param \BackendBundle\Entity\Medicamentos $idmedicacion
     *
     * @return HistoriaClinica
     */
    public function addIdmedicacion(\BackendBundle\Entity\Medicamentos $idmedicacion)
    {
        $this->idmedicacion[] = $idmedicacion;

        return $this;
    }

    /**
     * Remove idmedicacion
     *
     * @param \BackendBundle\Entity\Medicamentos $idmedicacion
     */
    public function removeIdmedicacion(\BackendBundle\Entity\Medicamentos $idmedicacion)
    {
        $this->idmedicacion->removeElement($idmedicacion);
    }

    /**
     * Get idmedicacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdmedicacion()
    {
        return $this->idmedicacion;
    }
}
