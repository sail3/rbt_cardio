<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CausaDescompensante
 *
 * @ORM\Table(name="causa_descompensante")
 * @ORM\Entity
 */
class CausaDescompensante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcausa_descompensante", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcausaDescompensante;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
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
     * @ORM\ManyToMany(targetEntity="Ficha", inversedBy="idcausaDescompensante")
     * @ORM\JoinTable(name="causa_descompensante_has_ficha",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idcausa_descompensante", referencedColumnName="idcausa_descompensante")
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
     * Get idcausaDescompensante
     *
     * @return integer
     */
    public function getId()
    {
        return $this->idcausaDescompensante;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CausaDescompensante
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
     * @return CausaDescompensante
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
     * @return CausaDescompensante
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
     * @return CausaDescompensante
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
