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
     * @ORM\Column(name="falla_cardiaca_etiologia", type="string", length=45, nullable=true)
     */
    private $fallaCardiacaEtiologia;

    /**
     * @var string
     *
     * @ORM\Column(name="nyha_ingreso", type="string", length=45, nullable=true)
     */
    private $nyhaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="sindrome_cardiorenal", type="string", length=45, nullable=true)
     */
    private $sindromeCardiorenal;

    /**
     * @var string
     *
     * @ORM\Column(name="fraccion_eyeccion", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $fraccionEyeccion;

    /**
     * @var string
     *
     * @ORM\Column(name="tapse", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $tapse;

    /**
     * @var string
     *
     * @ORM\Column(name="alta_motivo", type="string", length=45, nullable=true)
     */
    private $altaMotivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="alta_fecha", type="datetime", nullable=true)
     */
    private $altaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="alta_descripcion", type="string", length=45, nullable=true)
     */
    private $altaDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="anotaciones", type="text", nullable=true)
     */
    private $anotaciones;

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
        $this->idmedicacionAlta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idrxTorax = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idficha
     *
     * @return integer
     */
    public function getId()
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
     * @param string $sindromeCardiorenal
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
     * @return string
     */
    public function getSindromeCardiorenal()
    {
        return $this->sindromeCardiorenal;
    }

    /**
     * Set fraccionEyeccion
     *
     * @param string $fraccionEyeccion
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
     * @return string
     */
    public function getFraccionEyeccion()
    {
        return $this->fraccionEyeccion;
    }

    /**
     * Set tapse
     *
     * @param string $tapse
     * @return Ficha
     */
    public function setTapse($tapse)
    {
        $this->tapse = $tapse;

        return $this;
    }

    /**
     * Get tapse
     *
     * @return string
     */
    public function getTapse()
    {
        return $this->tapse;
    }

    /**
     * Set altaMotivo
     *
     * @param string $altaMotivo
     * @return Ficha
     */
    public function setAltaMotivo($altaMotivo)
    {
        $this->altaMotivo = $altaMotivo;

        return $this;
    }

    /**
     * Get altaMotivo
     *
     * @return string
     */
    public function getAltaMotivo()
    {
        return $this->altaMotivo;
    }

    /**
     * Set altaFecha
     *
     * @param \DateTime $altaFecha
     * @return Ficha
     */
    public function setAltaFecha($altaFecha)
    {
        $this->altaFecha = $altaFecha;

        return $this;
    }

    /**
     * Get altaFecha
     *
     * @return \DateTime
     */
    public function getAltaFecha()
    {
        return $this->altaFecha;
    }

    /**
     * Set altaDescripcion
     *
     * @param string $altaDescripcion
     * @return Ficha
     */
    public function setAltaDescripcion($altaDescripcion)
    {
        $this->altaDescripcion = $altaDescripcion;

        return $this;
    }

    /**
     * Get altaDescripcion
     *
     * @return string
     */
    public function getAltaDescripcion()
    {
        return $this->altaDescripcion;
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
}
