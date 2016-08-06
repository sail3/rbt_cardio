<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicacion
 *
 * @ORM\Table(name="medicacion")
 * @ORM\Entity
 */
class Medicacion
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
    private $enable;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ficha", inversedBy="idmedicacion")
     * @ORM\JoinTable(name="medicacion_has_ficha",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idmedicacion", referencedColumnName="idmedicacion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idficha", referencedColumnName="idficha")
     *   }
     * )
     */
    private $idficha;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="HistoriaClinica", inversedBy="idmedicacion")
     * @ORM\JoinTable(name="medicacion_has_historia_clinica",
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
        $this->idficha = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idpaciente = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idmedicacion
     *
     * @return integer
     */
    public function getId()
    {
        return $this->idmedicacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Medicacion
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
     * @return Medicacion
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
     * @return Medicacion
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
     * Add idficha
     *
     * @param \CardioBundle\Entity\Ficha $idficha
     * @return Medicacion
     */
    public function addIdficha(\CardioBundle\Entity\Ficha $idficha)
    {
        $this->idficha[] = $idficha;

        return $this;
    }

    /**
     * Remove idficha
     *
     * @param \CardioBundle\Entity\Ficha $idficha
     */
    public function removeIdficha(\CardioBundle\Entity\Ficha $idficha)
    {
        $this->idficha->removeElement($idficha);
    }

    /**
     * Get idficha
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdficha()
    {
        return $this->idficha;
    }

    /**
     * Add idpaciente
     *
     * @param \CardioBundle\Entity\HistoriaClinica $idpaciente
     * @return Medicacion
     */
    public function addIdpaciente(\CardioBundle\Entity\HistoriaClinica $idpaciente)
    {
        $this->idpaciente[] = $idpaciente;

        return $this;
    }

    /**
     * Remove idpaciente
     *
     * @param \CardioBundle\Entity\HistoriaClinica $idpaciente
     */
    public function removeIdpaciente(\CardioBundle\Entity\HistoriaClinica $idpaciente)
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

    public function __tostring()
    {
      return $this->getNombre();
    }
}
