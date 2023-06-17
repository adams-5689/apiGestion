<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Locataire;
use Doctrine\ORM\Mapping as ORM;

/**
 * Demanderenovation
 *
 * @ORM\Table(name="demanderenovation", indexes={@ORM\Index(name="locataire_id", columns={"locataire_id"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Demanderenovation
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
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var App\Entity\Locataire|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Locataire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locataire_id", referencedColumnName="id")
     * })
     */
    private $locataire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLocataire(): ?Locataire
    {
        return $this->locataire;
    }

    public function setLocataire(?Locataire $locataire): self
    {
        $this->locataire = $locataire;

        return $this;
    }


}
