<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Gestionnaireimmobilier;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Residence
 *
 * @ORM\Table(name="residence", indexes={@ORM\Index(name="gestionnaire_immobilier_id", columns={"gestionnaire_immobilier_id"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Residence
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
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=100, nullable=false)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=100, nullable=false)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=false)
     */
    private $ville;

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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_disponibilite", type="date", nullable=true)
     */
    private $dateDisponibilite;

    /**
     * @var App\Entity\Gestionnaireimmobilie|null
     *
     * @ORM\ManyToOne(targetEntity="Gestionnaireimmobilier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gestionnaire_immobilier_id", referencedColumnName="id")
     * })
     */
    private $gestionnaireImmobilier;

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

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
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

    public function getDateDisponibilite(): ?\DateTimeInterface
    {
        return $this->dateDisponibilite;
    }

    public function setDateDisponibilite(?\DateTimeInterface $dateDisponibilite): self
    {
        $this->dateDisponibilite = $dateDisponibilite;

        return $this;
    }

    public function getGestionnaireImmobilier(): ?Gestionnaireimmobilier
    {
        return $this->gestionnaireImmobilier;
    }

    public function setGestionnaireImmobilier(?Gestionnaireimmobilier $gestionnaireImmobilier): self
    {
        $this->gestionnaireImmobilier = $gestionnaireImmobilier;

        return $this;
    }


}
