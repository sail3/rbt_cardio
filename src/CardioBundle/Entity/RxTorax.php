<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxTorax
 *
 * @ORM\Table(name="rx_torax")
 * @ORM\Entity
 */
class RxTorax
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrx_torax", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrxTorax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="congestion_pulmonar", type="boolean", nullable=false)
     */
    private $congestionPulmonar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="derrame_pulmonar", type="boolean", nullable=false)
     */
    private $derramePulmonar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="derrame_pericardico", type="boolean", nullable=false)
     */
    private $derramePericardico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cardiomegalia", type="boolean", nullable=false)
     */
    private $cardiomegalia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="neumonia", type="boolean", nullable=false)
     */
    private $neumonia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ficha", inversedBy="idrxTorax")
     * @ORM\JoinTable(name="rx_torax_has_ficha",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idrx_torax", referencedColumnName="idrx_torax")
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
     * Get idrxTorax
     *
     * @return integer 
     */
    public function getIdrxTorax()
    {
        return $this->idrxTorax;
    }

    /**
     * Set congestionPulmonar
     *
     * @param boolean $congestionPulmonar
     * @return RxTorax
     */
    public function setCongestionPulmonar($congestionPulmonar)
    {
        $this->congestionPulmonar = $congestionPulmonar;

        return $this;
    }

    /**
     * Get congestionPulmonar
     *
     * @return boolean 
     */
    public function getCongestionPulmonar()
    {
        return $this->congestionPulmonar;
    }

    /**
     * Set derramePulmonar
     *
     * @param boolean $derramePulmonar
     * @return RxTorax
     */
    public function setDerramePulmonar($derramePulmonar)
    {
        $this->derramePulmonar = $derramePulmonar;

        return $this;
    }

    /**
     * Get derramePulmonar
     *
     * @return boolean 
     */
    public function getDerramePulmonar()
    {
        return $this->derramePulmonar;
    }

    /**
     * Set derramePericardico
     *
     * @param boolean $derramePericardico
     * @return RxTorax
     */
    public function setDerramePericardico($derramePericardico)
    {
        $this->derramePericardico = $derramePericardico;

        return $this;
    }

    /**
     * Get derramePericardico
     *
     * @return boolean 
     */
    public function getDerramePericardico()
    {
        return $this->derramePericardico;
    }

    /**
     * Set cardiomegalia
     *
     * @param boolean $cardiomegalia
     * @return RxTorax
     */
    public function setCardiomegalia($cardiomegalia)
    {
        $this->cardiomegalia = $cardiomegalia;

        return $this;
    }

    /**
     * Get cardiomegalia
     *
     * @return boolean 
     */
    public function getCardiomegalia()
    {
        return $this->cardiomegalia;
    }

    /**
     * Set neumonia
     *
     * @param boolean $neumonia
     * @return RxTorax
     */
    public function setNeumonia($neumonia)
    {
        $this->neumonia = $neumonia;

        return $this;
    }

    /**
     * Get neumonia
     *
     * @return boolean 
     */
    public function getNeumonia()
    {
        return $this->neumonia;
    }

    /**
     * Add idficha
     *
     * @param \CardioBundle\Entity\Ficha $idficha
     * @return RxTorax
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
}
