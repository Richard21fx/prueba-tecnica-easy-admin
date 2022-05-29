<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peliculas
 *
 * @ORM\Table(name="peliculas", indexes={@ORM\Index(name="fk_director_pelicula", columns={"director_id"}), @ORM\Index(name="fk_actores_pelicula", columns={"actor_id"})})
 * @ORM\Entity
 */
class Peliculas
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
     * @ORM\Column(name="imdb_title_id", type="string", length=50, nullable=false)
     */
    private $imdbTitleId;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo", type="string", length=200, nullable=false)
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_publicacion", type="date", nullable=false)
     */
    private $fechaPublicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="generos", type="string", length=100, nullable=false)
     */
    private $generos;

    /**
     * @var float
     *
     * @ORM\Column(name="Duracion", type="float", precision=100, scale=2, nullable=false)
     */
    private $duracion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="productora", type="string", length=255, nullable=true)
     */
    private $productora;

    /**
     * @var \Actores
     *
     * @ORM\ManyToOne(targetEntity="Actores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     * })
     */
    private $actor;

    /**
     * @var \Directores
     *
     * @ORM\ManyToOne(targetEntity="Directores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="director_id", referencedColumnName="id")
     * })
     */
    private $director;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImdbTitleId(): ?string
    {
        return $this->imdbTitleId;
    }

    public function setImdbTitleId(string $imdbTitleId): self
    {
        $this->imdbTitleId = $imdbTitleId;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion(\DateTimeInterface $fechaPublicacion): self
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    public function getGeneros(): ?string
    {
        return $this->generos;
    }

    public function setGeneros(string $generos): self
    {
        $this->generos = $generos;

        return $this;
    }

    public function getDuracion(): ?float
    {
        return $this->duracion;
    }

    public function setDuracion(float $duracion): self
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function getProductora(): ?string
    {
        return $this->productora;
    }

    public function setProductora(?string $productora): self
    {
        $this->productora = $productora;

        return $this;
    }

    public function getActor(): ?Actores
    {
        return $this->actor;
    }

    public function setActor(?Actores $actor): self
    {
        $this->actor = $actor;

        return $this;
    }

    public function getDirector(): ?Directores
    {
        return $this->director;
    }

    public function setDirector(?Directores $director): self
    {
        $this->director = $director;

        return $this;
    }


}
