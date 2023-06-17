<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Immeuble;
use Doctrine\ORM\Mapping as ORM;

/**
 * Appartement
 *
 * @ORM\Table(name="appartement", indexes={@ORM\Index(name="immeuble_id", columns={"immeuble_id"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Appartement
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
     * @var int
     *
     * @ORM\Column(name="nombre_chambres", type="integer", nullable=false)
     */
    private $nombreChambres;


    /**
     * @var int
     *
     * @ORM\Column(name="salon", type="integer", nullable=false)
     */
    private $salon;

    /**
     * @var int
     *
     * @ORM\Column(name="douche", type="integer", nullable=false)
     */
    private $douche;

    /**
    * @var string
    *
    * @ORM\Column(name="prix_location", type="decimal", precision=10, scale=2, nullable=false)
    */
    private $prixLocation;



    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Immeuble")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="immeuble_id", referencedColumnName="id")
     * })
     */
    private $immeuble_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreChambres(): ?int
    {
        return $this->nombreChambres;
    }

    public function setNombreChambres(int $nombreChambres): self
    {
        $this->nombreChambres = $nombreChambres;

        return $this;
    }


    public function getSalon(): ?int
    {
        return $this->salon;
    }

    public function setSalon(int $salon): self
    {
        $this->salon = $salon;

        return $this;
    }

    public function getDouche(): ?int
    {
        return $this->douche;
    }

    public function setDouche(int $douche): self
    {
        $this->douche = $douche;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImmeuble(): ?int
    {
        return $this->immeuble_id;
    }

    public function setImmeuble(?int $immeuble): self
    {
        $this->immeuble_id = $immeuble;

        return $this;
    }

    public function getprixLocation(): ?string
    {
        return $this->prixLocation;
    }

    public function setprixLocation(string $prixLocation): self
    {
        $this->prixLocation = $prixLocation;
        return $this;
    }



}
