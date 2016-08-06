<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FactorRiesgo
 *
 * @ORM\Table(name="factor_riesgo")
 * @ORM\Entity
 */
class FactorRiesgo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfactor_riesgo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactorRiesgo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
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
     * @ORM\ManyToMany(targetEntity="Ficha", inversedBy="idfactorRiesgo")
     * @ORM\JoinTable(name="factor_riesgo_has_ficha",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idfactor_riesgo", referencedColumnName="idfactor_riesgo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idficha", referencedColumnName="idficha")
     *   }
     * )
     */
    private $idficha;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idficha = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idfactorRiesgo
     *
     * @return integer
     */
    public function getId()
    {
        return $this->idfactorRiesgo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return FactorRiesgo
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
     * @return FactorRiesgo
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
     * @return FactorRiesgo
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
     * @return FactorRiesgo
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


    public function __tostring()
    {
      return $this->getNombre();
    }
}
