<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ficha
 *
 * @ORM\Table(name="ficha")
 * @ORM\Entity
 */
class Ficha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idficha", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idficha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo_hospitalizacion", type="string", length=100, nullable=true)
     */
    private $motivoHospitalizacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="falla_cardiaca", type="boolean", nullable=true)
     */
    private $fallaCardiaca;

    /**
     * @var string
     *
     * @ORM\Column(name="falla_cardiaca_etiologia", type="string", length=100, nullable=true)
     */
    private $fallaCardiacaEtiologia;

    /**
     * @var string
     *
     * @ORM\Column(name="nyha_ingreso", type="string", length=2, nullable=true)
     */
    private $nyhaIngreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sindrome_cardiorenal", type="boolean", nullable=true)
     */
    private $sindromeCardiorenal;

    /**
     * @var string
     *
     * @ORM\Column(name="sindrome_cardiorenal_tipo", type="string", length=2, nullable=true)
     */
    private $sindromeCardiorenalTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fraccion_eyeccion", type="integer", nullable=true)
     */
    private $fraccionEyeccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transfusion_sanguinea", type="boolean", nullable=true)
     */
    private $transfusionSanguinea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ccee_asiste", type="boolean", nullable=true)
     */
    private $cceeAsiste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ccee_ultima", type="datetime", nullable=true)
     */
    private $cceeUltima;

    /**
     * @var integer
     *
     * @ORM\Column(name="hospitalizaciones", type="integer", nullable=true)
     */
    private $hospitalizaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="anotaciones", type="text", nullable=true)
     */
    private $anotaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="examen_solicitado", type="text", nullable=true)
     */
    private $examenSolicitado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CausaDescompensante", mappedBy="idficha")
     */
    private $idcausaDescompensante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EstadoEvolutivo", mappedBy="idficha")
     */
    private $idestadoEvolutivo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FactorRiesgo", mappedBy="idficha")
     */
    private $idfactorRiesgo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Paciente", inversedBy="idficha")
     * @ORM\JoinTable(name="ficha_has_paciente",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idficha", referencedColumnName="idficha")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idpaciente", referencedColumnName="idpaciente")
     *   }
     * )
     */
    private $idpaciente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Medicacion", mappedBy="idficha")
     */
    private $idmedicacionAlta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="RxTorax", mappedBy="idficha")
     */
    private $idrxTorax;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcausaDescompensante = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idestadoEvolutivo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idfactorRiesgo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idpaciente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idmedicacionAlta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idrxTorax = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idficha
     *
     * @return integer
     */
    public function getIdficha()
    {
        return $this->idficha;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Ficha
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set motivoHospitalizacion
     *
     * @param string $motivoHospitalizacion
     * @return Ficha
     */
    public function setMotivoHospitalizacion($motivoHospitalizacion)
    {
        $this->motivoHospitalizacion = $motivoHospitalizacion;

        return $this;
    }

    /**
     * Get motivoHospitalizacion
     *
     * @return string
     */
    public function getMotivoHospitalizacion()
    {
        return $this->motivoHospitalizacion;
    }

    /**
     * Set fallaCardiaca
     *
     * @param boolean $fallaCardiaca
     * @return Ficha
     */
    public function setFallaCardiaca($fallaCardiaca)
    {
        $this->fallaCardiaca = $fallaCardiaca;

        return $this;
    }

    /**
     * Get fallaCardiaca
     *
     * @return boolean
     */
    public function getFallaCardiaca()
    {
        return $this->fallaCardiaca;
    }

    /**
     * Set fallaCardiacaEtiologia
     *
     * @param string $fallaCardiacaEtiologia
     * @return Ficha
     */
    public function setFallaCardiacaEtiologia($fallaCardiacaEtiologia)
    {
        $this->fallaCardiacaEtiologia = $fallaCardiacaEtiologia;

        return $this;
    }

    /**
     * Get fallaCardiacaEtiologia
     *
     * @return string
     */
    public function getFallaCardiacaEtiologia()
    {
        return $this->fallaCardiacaEtiologia;
    }

    /**
     * Set nyhaIngreso
     *
     * @param string $nyhaIngreso
     * @return Ficha
     */
    public function setNyhaIngreso($nyhaIngreso)
    {
        $this->nyhaIngreso = $nyhaIngreso;

        return $this;
    }

    /**
     * Get nyhaIngreso
     *
     * @return string
     */
    public function getNyhaIngreso()
    {
        return $this->nyhaIngreso;
    }

    /**
     * Set sindromeCardiorenal
     *
     * @param boolean $sindromeCardiorenal
     * @return Ficha
     */
    public function setSindromeCardiorenal($sindromeCardiorenal)
    {
        $this->sindromeCardiorenal = $sindromeCardiorenal;

        return $this;
    }

    /**
     * Get sindromeCardiorenal
     *
     * @return boolean
     */
    public function getSindromeCardiorenal()
    {
        return $this->sindromeCardiorenal;
    }

    /**
     * Set sindromeCardiorenalTipo
     *
     * @param string $sindromeCardiorenalTipo
     * @return Ficha
     */
    public function setSindromeCardiorenalTipo($sindromeCardiorenalTipo)
    {
        $this->sindromeCardiorenalTipo = $sindromeCardiorenalTipo;

        return $this;
    }

    /**
     * Get sindromeCardiorenalTipo
     *
     * @return string
     */
    public function getSindromeCardiorenalTipo()
    {
        return $this->sindromeCardiorenalTipo;
    }

    /**
     * Set fraccionEyeccion
     *
     * @param integer $fraccionEyeccion
     * @return Ficha
     */
    public function setFraccionEyeccion($fraccionEyeccion)
    {
        $this->fraccionEyeccion = $fraccionEyeccion;

        return $this;
    }

    /**
     * Get fraccionEyeccion
     *
     * @return integer
     */
    public function getFraccionEyeccion()
    {
        return $this->fraccionEyeccion;
    }

    /**
     * Set transfusionSanguinea
     *
     * @param boolean $transfusionSanguinea
     * @return Ficha
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
     * Set cceeAsiste
     *
     * @param boolean $cceeAsiste
     * @return Ficha
     */
    public function setCceeAsiste($cceeAsiste)
    {
        $this->cceeAsiste = $cceeAsiste;

        return $this;
    }

    /**
     * Get cceeAsiste
     *
     * @return boolean
     */
    public function getCceeAsiste()
    {
        return $this->cceeAsiste;
    }

    /**
     * Set cceeUltima
     *
     * @param \DateTime $cceeUltima
     * @return Ficha
     */
    public function setCceeUltima($cceeUltima)
    {
        $this->cceeUltima = $cceeUltima;

        return $this;
    }

    /**
     * Get cceeUltima
     *
     * @return \DateTime
     */
    public function getCceeUltima()
    {
        return $this->cceeUltima;
    }

    /**
     * Set hospitalizaciones
     *
     * @param integer $hospitalizaciones
     * @return Ficha
     */
    public function setHospitalizaciones($hospitalizaciones)
    {
        $this->hospitalizaciones = $hospitalizaciones;

        return $this;
    }

    /**
     * Get hospitalizaciones
     *
     * @return integer
     */
    public function getHospitalizaciones()
    {
        return $this->hospitalizaciones;
    }

    /**
     * Set anotaciones
     *
     * @param string $anotaciones
     * @return Ficha
     */
    public function setAnotaciones($anotaciones)
    {
        $this->anotaciones = $anotaciones;

        return $this;
    }

    /**
     * Get anotaciones
     *
     * @return string
     */
    public function getAnotaciones()
    {
        return $this->anotaciones;
    }

    /**
     * Set examenSolicitado
     *
     * @param string $examenSolicitado
     * @return Ficha
     */
    public function setExamenSolicitado($examenSolicitado)
    {
        $this->examenSolicitado = $examenSolicitado;

        return $this;
    }

    /**
     * Get examenSolicitado
     *
     * @return string
     */
    public function getExamenSolicitado()
    {
        return $this->examenSolicitado;
    }

    /**
     * Add idcausaDescompensante
     *
     * @param \CardioBundle\Entity\CausaDescompensante $idcausaDescompensante
     * @return Ficha
     */
    public function addIdcausaDescompensante(\CardioBundle\Entity\CausaDescompensante $idcausaDescompensante)
    {
        $this->idcausaDescompensante[] = $idcausaDescompensante;

        return $this;
    }

    /**
     * Remove idcausaDescompensante
     *
     * @param \CardioBundle\Entity\CausaDescompensante $idcausaDescompensante
     */
    public function removeIdcausaDescompensante(\CardioBundle\Entity\CausaDescompensante $idcausaDescompensante)
    {
        $this->idcausaDescompensante->removeElement($idcausaDescompensante);
    }

    /**
     * Get idcausaDescompensante
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcausaDescompensante()
    {
        return $this->idcausaDescompensante;
    }

    /**
     * Add idestadoEvolutivo
     *
     * @param \CardioBundle\Entity\EstadoEvolutivo $idestadoEvolutivo
     * @return Ficha
     */
    public function addIdestadoEvolutivo(\CardioBundle\Entity\EstadoEvolutivo $idestadoEvolutivo)
    {
        $this->idestadoEvolutivo[] = $idestadoEvolutivo;

        return $this;
    }

    /**
     * Remove idestadoEvolutivo
     *
     * @param \CardioBundle\Entity\EstadoEvolutivo $idestadoEvolutivo
     */
    public function removeIdestadoEvolutivo(\CardioBundle\Entity\EstadoEvolutivo $idestadoEvolutivo)
    {
        $this->idestadoEvolutivo->removeElement($idestadoEvolutivo);
    }

    /**
     * Get idestadoEvolutivo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdestadoEvolutivo()
    {
        return $this->idestadoEvolutivo;
    }

    /**
     * Add idfactorRiesgo
     *
     * @param \CardioBundle\Entity\FactorRiesgo $idfactorRiesgo
     * @return Ficha
     */
    public function addIdfactorRiesgo(\CardioBundle\Entity\FactorRiesgo $idfactorRiesgo)
    {
        $this->idfactorRiesgo[] = $idfactorRiesgo;

        return $this;
    }

    /**
     * Remove idfactorRiesgo
     *
     * @param \CardioBundle\Entity\FactorRiesgo $idfactorRiesgo
     */
    public function removeIdfactorRiesgo(\CardioBundle\Entity\FactorRiesgo $idfactorRiesgo)
    {
        $this->idfactorRiesgo->removeElement($idfactorRiesgo);
    }

    /**
     * Get idfactorRiesgo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdfactorRiesgo()
    {
        return $this->idfactorRiesgo;
    }

    /**
     * Add idpaciente
     *
     * @param \CardioBundle\Entity\Paciente $idpaciente
     * @return Ficha
     */
    public function addIdpaciente(\CardioBundle\Entity\Paciente $idpaciente)
    {
        $this->idpaciente[] = $idpaciente;

        return $this;
    }

    /**
     * Remove idpaciente
     *
     * @param \CardioBundle\Entity\Paciente $idpaciente
     */
    public function removeIdpaciente(\CardioBundle\Entity\Paciente $idpaciente)
    {
        $this->idpaciente->removeElement($idpaciente);
    }

    /**
     * Get idpaciente
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }

    /**
     * Add idmedicacionAlta
     *
     * @param \CardioBundle\Entity\Medicacion $idmedicacionAlta
     * @return Ficha
     */
    public function addIdmedicacionAltum(\CardioBundle\Entity\Medicacion $idmedicacionAlta)
    {
        $this->idmedicacionAlta[] = $idmedicacionAlta;

        return $this;
    }

    /**
     * Remove idmedicacionAlta
     *
     * @param \CardioBundle\Entity\Medicacion $idmedicacionAlta
     */
    public function removeIdmedicacionAltum(\CardioBundle\Entity\Medicacion $idmedicacionAlta)
    {
        $this->idmedicacionAlta->removeElement($idmedicacionAlta);
    }

    /**
     * Get idmedicacionAlta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdmedicacionAlta()
    {
        return $this->idmedicacionAlta;
    }

    /**
     * Add idrxTorax
     *
     * @param \CardioBundle\Entity\RxTorax $idrxTorax
     * @return Ficha
     */
    public function addIdrxTorax(\CardioBundle\Entity\RxTorax $idrxTorax)
    {
        $this->idrxTorax[] = $idrxTorax;

        return $this;
    }

    /**
     * Remove idrxTorax
     *
     * @param \CardioBundle\Entity\RxTorax $idrxTorax
     */
    public function removeIdrxTorax(\CardioBundle\Entity\RxTorax $idrxTorax)
    {
        $this->idrxTorax->removeElement($idrxTorax);
    }

    /**
     * Get idrxTorax
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdrxTorax()
    {
        return $this->idrxTorax;
    }

    public function __toString()
    {
      return (string)$this->idficha;
    }
}
