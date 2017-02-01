<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicamentos
 *
 * @ORM\Table(name="medicamentos")
 * @ORM\Entity
 */
class Medicamentos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmedicacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable", type="boolean", nullable=false)
     */
    private $enable = '1';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="HistoriaClinica", inversedBy="idmedicacion")
     * @ORM\JoinTable(name="medicacion_habitual",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idmedicacion", referencedColumnName="idmedicacion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idpaciente", referencedColumnName="idpaciente")
     *   }
     * )
     */
    private $idpaciente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idpaciente = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idmedicacion
     *
     * @return integer
     */
    public function getIdmedicacion()
    {
        return $this->idmedicacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Medicamentos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Medicamentos
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
     * Set enable
     *
     * @param boolean $enable
     *
     * @return Medicamentos
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return boolean
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Add idpaciente
     *
     * @param \BackendBundle\Entity\HistoriaClinica $idpaciente
     *
     * @return Medicamentos
     */
    public function addIdpaciente(\BackendBundle\Entity\HistoriaClinica $idpaciente)
    {
        $this->idpaciente[] = $idpaciente;

        return $this;
    }

    /**
     * Remove idpaciente
     *
     * @param \BackendBundle\Entity\HistoriaClinica $idpaciente
     */
    public function removeIdpaciente(\BackendBundle\Entity\HistoriaClinica $idpaciente)
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
}
