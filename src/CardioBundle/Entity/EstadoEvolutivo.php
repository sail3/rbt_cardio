<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoEvolutivo
 *
 * @ORM\Table(name="estado_evolutivo")
 * @ORM\Entity
 */
class EstadoEvolutivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idestado_evolutivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestadoEvolutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="glucosa", type="string", length=45, nullable=true)
     */
    private $glucosa;

    /**
     * @var string
     *
     * @ORM\Column(name="creatinina", type="string", length=45, nullable=true)
     */
    private $creatinina;

    /**
     * @var string
     *
     * @ORM\Column(name="sodio", type="string", length=45, nullable=true)
     */
    private $sodio;

    /**
     * @var string
     *
     * @ORM\Column(name="hb", type="string", length=45, nullable=true)
     */
    private $hb;

    /**
     * @var string
     *
     * @ORM\Column(name="vmc", type="string", length=45, nullable=true)
     */
    private $vmc;

    /**
     * @var string
     *
     * @ORM\Column(name="rdw", type="string", length=45, nullable=true)
     */
    private $rdw;

    /**
     * @var string
     *
     * @ORM\Column(name="leucocitos", type="string", length=45, nullable=true)
     */
    private $leucocitos;

    /**
     * @var string
     *
     * @ORM\Column(name="neutro", type="string", length=45, nullable=true)
     */
    private $neutro;

    /**
     * @var string
     *
     * @ORM\Column(name="linfocitos", type="string", length=45, nullable=true)
     */
    private $linfocitos;

    /**
     * @var string
     *
     * @ORM\Column(name="troponina", type="string", length=45, nullable=true)
     */
    private $troponina;

    /**
     * @var string
     *
     * @ORM\Column(name="tgp", type="string", length=45, nullable=true)
     */
    private $tgp;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_bnp", type="string", length=45, nullable=true)
     */
    private $proBnp;

    /**
     * @var string
     *
     * @ORM\Column(name="lactato", type="string", length=45, nullable=true)
     */
    private $lactato;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ficha", inversedBy="idestadoEvolutivo")
     * @ORM\JoinTable(name="estado_evolutivo_has_ficha",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idestado_evolutivo", referencedColumnName="idestado_evolutivo")
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
     * Get idestadoEvolutivo
     *
     * @return integer 
     */
    public function getIdestadoEvolutivo()
    {
        return $this->idestadoEvolutivo;
    }

    /**
     * Set glucosa
     *
     * @param string $glucosa
     * @return EstadoEvolutivo
     */
    public function setGlucosa($glucosa)
    {
        $this->glucosa = $glucosa;

        return $this;
    }

    /**
     * Get glucosa
     *
     * @return string 
     */
    public function getGlucosa()
    {
        return $this->glucosa;
    }

    /**
     * Set creatinina
     *
     * @param string $creatinina
     * @return EstadoEvolutivo
     */
    public function setCreatinina($creatinina)
    {
        $this->creatinina = $creatinina;

        return $this;
    }

    /**
     * Get creatinina
     *
     * @return string 
     */
    public function getCreatinina()
    {
        return $this->creatinina;
    }

    /**
     * Set sodio
     *
     * @param string $sodio
     * @return EstadoEvolutivo
     */
    public function setSodio($sodio)
    {
        $this->sodio = $sodio;

        return $this;
    }

    /**
     * Get sodio
     *
     * @return string 
     */
    public function getSodio()
    {
        return $this->sodio;
    }

    /**
     * Set hb
     *
     * @param string $hb
     * @return EstadoEvolutivo
     */
    public function setHb($hb)
    {
        $this->hb = $hb;

        return $this;
    }

    /**
     * Get hb
     *
     * @return string 
     */
    public function getHb()
    {
        return $this->hb;
    }

    /**
     * Set vmc
     *
     * @param string $vmc
     * @return EstadoEvolutivo
     */
    public function setVmc($vmc)
    {
        $this->vmc = $vmc;

        return $this;
    }

    /**
     * Get vmc
     *
     * @return string 
     */
    public function getVmc()
    {
        return $this->vmc;
    }

    /**
     * Set rdw
     *
     * @param string $rdw
     * @return EstadoEvolutivo
     */
    public function setRdw($rdw)
    {
        $this->rdw = $rdw;

        return $this;
    }

    /**
     * Get rdw
     *
     * @return string 
     */
    public function getRdw()
    {
        return $this->rdw;
    }

    /**
     * Set leucocitos
     *
     * @param string $leucocitos
     * @return EstadoEvolutivo
     */
    public function setLeucocitos($leucocitos)
    {
        $this->leucocitos = $leucocitos;

        return $this;
    }

    /**
     * Get leucocitos
     *
     * @return string 
     */
    public function getLeucocitos()
    {
        return $this->leucocitos;
    }

    /**
     * Set neutro
     *
     * @param string $neutro
     * @return EstadoEvolutivo
     */
    public function setNeutro($neutro)
    {
        $this->neutro = $neutro;

        return $this;
    }

    /**
     * Get neutro
     *
     * @return string 
     */
    public function getNeutro()
    {
        return $this->neutro;
    }

    /**
     * Set linfocitos
     *
     * @param string $linfocitos
     * @return EstadoEvolutivo
     */
    public function setLinfocitos($linfocitos)
    {
        $this->linfocitos = $linfocitos;

        return $this;
    }

    /**
     * Get linfocitos
     *
     * @return string 
     */
    public function getLinfocitos()
    {
        return $this->linfocitos;
    }

    /**
     * Set troponina
     *
     * @param string $troponina
     * @return EstadoEvolutivo
     */
    public function setTroponina($troponina)
    {
        $this->troponina = $troponina;

        return $this;
    }

    /**
     * Get troponina
     *
     * @return string 
     */
    public function getTroponina()
    {
        return $this->troponina;
    }

    /**
     * Set tgp
     *
     * @param string $tgp
     * @return EstadoEvolutivo
     */
    public function setTgp($tgp)
    {
        $this->tgp = $tgp;

        return $this;
    }

    /**
     * Get tgp
     *
     * @return string 
     */
    public function getTgp()
    {
        return $this->tgp;
    }

    /**
     * Set proBnp
     *
     * @param string $proBnp
     * @return EstadoEvolutivo
     */
    public function setProBnp($proBnp)
    {
        $this->proBnp = $proBnp;

        return $this;
    }

    /**
     * Get proBnp
     *
     * @return string 
     */
    public function getProBnp()
    {
        return $this->proBnp;
    }

    /**
     * Set lactato
     *
     * @param string $lactato
     * @return EstadoEvolutivo
     */
    public function setLactato($lactato)
    {
        $this->lactato = $lactato;

        return $this;
    }

    /**
     * Get lactato
     *
     * @return string 
     */
    public function getLactato()
    {
        return $this->lactato;
    }

    /**
     * Add idficha
     *
     * @param \CardioBundle\Entity\Ficha $idficha
     * @return EstadoEvolutivo
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
