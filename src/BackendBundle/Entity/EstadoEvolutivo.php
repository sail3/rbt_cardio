<?php

namespace BackendBundle\Entity;

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
     * @ORM\Column(name="urea", type="string", length=45, nullable=true)
     */
    private $urea;

    /**
     * @var string
     *
     * @ORM\Column(name="sodio", type="string", length=45, nullable=true)
     */
    private $sodio;

    /**
     * @var string
     *
     * @ORM\Column(name="potasio", type="string", length=45, nullable=true)
     */
    private $potasio;

    /**
     * @var string
     *
     * @ORM\Column(name="hb", type="string", length=45, nullable=true)
     */
    private $hb;

    /**
     * @var string
     *
     * @ORM\Column(name="plaquetas", type="string", length=45, nullable=true)
     */
    private $plaquetas;

    /**
     * @var string
     *
     * @ORM\Column(name="vmc", type="string", length=45, nullable=true)
     */
    private $vmc;

    /**
     * @var string
     *
     * @ORM\Column(name="hmc", type="string", length=45, nullable=true)
     */
    private $hmc;

    /**
     * @var string
     *
     * @ORM\Column(name="rdw_cv", type="string", length=45, nullable=true)
     */
    private $rdwCv;

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
     * @ORM\Column(name="cpk_mb", type="string", length=45, nullable=true)
     */
    private $cpkMb;

    /**
     * @var string
     *
     * @ORM\Column(name="tgp", type="string", length=45, nullable=true)
     */
    private $tgp;

    /**
     * @var string
     *
     * @ORM\Column(name="albumina", type="string", length=45, nullable=true)
     */
    private $albumina;

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
     *
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
     *
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
     * Set urea
     *
     * @param string $urea
     *
     * @return EstadoEvolutivo
     */
    public function setUrea($urea)
    {
        $this->urea = $urea;

        return $this;
    }

    /**
     * Get urea
     *
     * @return string
     */
    public function getUrea()
    {
        return $this->urea;
    }

    /**
     * Set sodio
     *
     * @param string $sodio
     *
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
     * Set potasio
     *
     * @param string $potasio
     *
     * @return EstadoEvolutivo
     */
    public function setPotasio($potasio)
    {
        $this->potasio = $potasio;

        return $this;
    }

    /**
     * Get potasio
     *
     * @return string
     */
    public function getPotasio()
    {
        return $this->potasio;
    }

    /**
     * Set hb
     *
     * @param string $hb
     *
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
     * Set plaquetas
     *
     * @param string $plaquetas
     *
     * @return EstadoEvolutivo
     */
    public function setPlaquetas($plaquetas)
    {
        $this->plaquetas = $plaquetas;

        return $this;
    }

    /**
     * Get plaquetas
     *
     * @return string
     */
    public function getPlaquetas()
    {
        return $this->plaquetas;
    }

    /**
     * Set vmc
     *
     * @param string $vmc
     *
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
     * Set hmc
     *
     * @param string $hmc
     *
     * @return EstadoEvolutivo
     */
    public function setHmc($hmc)
    {
        $this->hmc = $hmc;

        return $this;
    }

    /**
     * Get hmc
     *
     * @return string
     */
    public function getHmc()
    {
        return $this->hmc;
    }

    /**
     * Set rdwCv
     *
     * @param string $rdwCv
     *
     * @return EstadoEvolutivo
     */
    public function setRdwCv($rdwCv)
    {
        $this->rdwCv = $rdwCv;

        return $this;
    }

    /**
     * Get rdwCv
     *
     * @return string
     */
    public function getRdwCv()
    {
        return $this->rdwCv;
    }

    /**
     * Set leucocitos
     *
     * @param string $leucocitos
     *
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
     *
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
     *
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
     *
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
     * Set cpkMb
     *
     * @param string $cpkMb
     *
     * @return EstadoEvolutivo
     */
    public function setCpkMb($cpkMb)
    {
        $this->cpkMb = $cpkMb;

        return $this;
    }

    /**
     * Get cpkMb
     *
     * @return string
     */
    public function getCpkMb()
    {
        return $this->cpkMb;
    }

    /**
     * Set tgp
     *
     * @param string $tgp
     *
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
     * Set albumina
     *
     * @param string $albumina
     *
     * @return EstadoEvolutivo
     */
    public function setAlbumina($albumina)
    {
        $this->albumina = $albumina;

        return $this;
    }

    /**
     * Get albumina
     *
     * @return string
     */
    public function getAlbumina()
    {
        return $this->albumina;
    }

    /**
     * Set proBnp
     *
     * @param string $proBnp
     *
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
     *
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
}
