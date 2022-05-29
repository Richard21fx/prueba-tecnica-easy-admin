<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImbdMovies
 *
 * @ORM\Table(name="imbd_movies")
 * @ORM\Entity
 */
class ImbdMovies
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
     * @var string|null
     *
     * @ORM\Column(name="imdb_title_id", type="string", length=50, nullable=true)
     */
    private $imdbTitleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titulo_original", type="string", length=255, nullable=true)
     */
    private $tituloOriginal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="año", type="integer", nullable=true)
     */
    private $año;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_de_estreno", type="date", nullable=true)
     */
    private $fechaDeEstreno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genero", type="string", length=255, nullable=true)
     */
    private $genero;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duracion", type="integer", nullable=true)
     */
    private $duracion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pais", type="string", length=255, nullable=true)
     */
    private $pais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idioma", type="string", length=255, nullable=true)
     */
    private $idioma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="director", type="string", length=255, nullable=true)
     */
    private $director;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guionista", type="string", length=255, nullable=true)
     */
    private $guionista;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compañia_productora", type="text", length=65535, nullable=true)
     */
    private $compañiaProductora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actores", type="text", length=65535, nullable=true)
     */
    private $actores;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="votos_promedio", type="integer", nullable=true)
     */
    private $votosPromedio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="votos", type="integer", nullable=true)
     */
    private $votos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="presupuesto", type="string", length=100, nullable=true)
     */
    private $presupuesto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ingresos_brutos_estados_unidos", type="string", length=100, nullable=true)
     */
    private $ingresosBrutosEstadosUnidos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ingresos_brutos_mundiales", type="string", length=100, nullable=true)
     */
    private $ingresosBrutosMundiales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_objetivo", type="string", length=20, nullable=true)
     */
    private $metaObjetivo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="opinion_del_publico", type="integer", nullable=true)
     */
    private $opinionDelPublico;

    /**
     * @var int|null
     *
     * @ORM\Column(name="opinion_de_la_critica", type="integer", nullable=true)
     */
    private $opinionDeLaCritica;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImdbTitleId(): ?string
    {
        return $this->imdbTitleId;
    }

    public function setImdbTitleId(?string $imdbTitleId): self
    {
        $this->imdbTitleId = $imdbTitleId;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getTituloOriginal(): ?string
    {
        return $this->tituloOriginal;
    }

    public function setTituloOriginal(?string $tituloOriginal): self
    {
        $this->tituloOriginal = $tituloOriginal;

        return $this;
    }

    public function getAño(): ?int
    {
        return $this->año;
    }

    public function setAño(?int $año): self
    {
        $this->año = $año;

        return $this;
    }

    public function getFechaDeEstreno(): ?\DateTimeInterface
    {
        return $this->fechaDeEstreno;
    }

    public function setFechaDeEstreno(?\DateTimeInterface $fechaDeEstreno): self
    {
        $this->fechaDeEstreno = $fechaDeEstreno;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(?string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getDuracion(): ?int
    {
        return $this->duracion;
    }

    public function setDuracion(?int $duracion): self
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getIdioma(): ?string
    {
        return $this->idioma;
    }

    public function setIdioma(?string $idioma): self
    {
        $this->idioma = $idioma;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(?string $director): self
    {
        $this->director = $director;

        return $this;
    }

    public function getGuionista(): ?string
    {
        return $this->guionista;
    }

    public function setGuionista(?string $guionista): self
    {
        $this->guionista = $guionista;

        return $this;
    }

    public function getCompañiaProductora(): ?string
    {
        return $this->compañiaProductora;
    }

    public function setCompañiaProductora(?string $compañiaProductora): self
    {
        $this->compañiaProductora = $compañiaProductora;

        return $this;
    }

    public function getActores(): ?string
    {
        return $this->actores;
    }

    public function setActores(?string $actores): self
    {
        $this->actores = $actores;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getVotosPromedio(): ?int
    {
        return $this->votosPromedio;
    }

    public function setVotosPromedio(?int $votosPromedio): self
    {
        $this->votosPromedio = $votosPromedio;

        return $this;
    }

    public function getVotos(): ?int
    {
        return $this->votos;
    }

    public function setVotos(?int $votos): self
    {
        $this->votos = $votos;

        return $this;
    }

    public function getPresupuesto(): ?string
    {
        return $this->presupuesto;
    }

    public function setPresupuesto(?string $presupuesto): self
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    public function getIngresosBrutosEstadosUnidos(): ?string
    {
        return $this->ingresosBrutosEstadosUnidos;
    }

    public function setIngresosBrutosEstadosUnidos(?string $ingresosBrutosEstadosUnidos): self
    {
        $this->ingresosBrutosEstadosUnidos = $ingresosBrutosEstadosUnidos;

        return $this;
    }

    public function getIngresosBrutosMundiales(): ?string
    {
        return $this->ingresosBrutosMundiales;
    }

    public function setIngresosBrutosMundiales(?string $ingresosBrutosMundiales): self
    {
        $this->ingresosBrutosMundiales = $ingresosBrutosMundiales;

        return $this;
    }

    public function getMetaObjetivo(): ?string
    {
        return $this->metaObjetivo;
    }

    public function setMetaObjetivo(?string $metaObjetivo): self
    {
        $this->metaObjetivo = $metaObjetivo;

        return $this;
    }

    public function getOpinionDelPublico(): ?int
    {
        return $this->opinionDelPublico;
    }

    public function setOpinionDelPublico(?int $opinionDelPublico): self
    {
        $this->opinionDelPublico = $opinionDelPublico;

        return $this;
    }

    public function getOpinionDeLaCritica(): ?int
    {
        return $this->opinionDeLaCritica;
    }

    public function setOpinionDeLaCritica(?int $opinionDeLaCritica): self
    {
        $this->opinionDeLaCritica = $opinionDeLaCritica;

        return $this;
    }


}
