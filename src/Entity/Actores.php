<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actores
 *
 * @ORM\Table(name="actores")
 * @ORM\Entity
 */
class Actores
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=500, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_fallecimiento", type="date", nullable=true)
     */
    private $fechaFallecimiento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lugar_nacimiento", type="string", length=255, nullable=true)
     */
    private $lugarNacimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?\DateTimeInterface $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getFechaFallecimiento(): ?\DateTimeInterface
    {
        return $this->fechaFallecimiento;
    }

    public function setFechaFallecimiento(?\DateTimeInterface $fechaFallecimiento): self
    {
        $this->fechaFallecimiento = $fechaFallecimiento;

        return $this;
    }

    public function getLugarNacimiento(): ?string
    {
        return $this->lugarNacimiento;
    }

    public function setLugarNacimiento(?string $lugarNacimiento): self
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }


}
