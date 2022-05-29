<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directores
 *
 * @ORM\Table(name="directores")
 * @ORM\Entity
 */
class Directores
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
     * @ORM\Column(name="pelicula", type="string", length=255, nullable=false)
     */
    private $pelicula;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPelicula(): ?string
    {
        return $this->pelicula;
    }

    public function setPelicula(string $pelicula): self
    {
        $this->pelicula = $pelicula;

        return $this;
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


}
