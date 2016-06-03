<?php

namespace CardioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente", uniqueConstraints={@ORM\UniqueConstraint(name="historia_UNIQUE", columns={"historia"}), @ORM\UniqueConstraint(name="dni_UNIQUE", columns={"dni"})})
 * @ORM\Entity
 */
class Paciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpaciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="historia", type="string", length=12, nullable=false)
     */
    private $historia;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=8, nullable=false)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="paterno", type="string", length=50, nullable=false)
     */
    private $paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="materno", type="string", length=50, nullable=false)
     */
    private $materno;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=6, nullable=true)
     */
    private $genero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=12, nullable=true)
     */
    private $telefono;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ficha", mappedBy="idpaciente")
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
     * Get idpaciente
     *
     * @return integer 
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }

    /**
     * Set historia
     *
     * @param string $historia
     * @return Paciente
     */
    public function setHistoria($historia)
    {
        $this->historia = $historia;

        return $this;
    }

    /**
     * Get historia
     *
     * @return string 
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Paciente
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
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
     * Set paterno
     *
     * @param string $paterno
     * @return Paciente
     */
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;

        return $this;
    }

    /**
     * Get paterno
     *
     * @return string 
     */
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set materno
     *
     * @param string $materno
     * @return Paciente
     */
    public function setMaterno($materno)
    {
        $this->materno = $materno;

        return $this;
    }

    /**
     * Get materno
     *
     * @return string 
     */
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Paciente
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Paciente
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Paciente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Paciente
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Paciente
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Add idficha
     *
     * @param \CardioBundle\Entity\Ficha $idficha
     * @return Paciente
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
