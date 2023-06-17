<?php

namespace App\Entity;
use App\Entity\Residence;
use App\Entity\Utilisateur;
use App\Entity\Gestionnaireimmobilier;
use Doctrine\DBAL\Types\Types;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="residence_id", columns={"residence_id"}), @ORM\Index(name="gestionnaire_immobilier_id", columns={"gestionnaire_immobilier_id"}), @ORM\Index(name="utilisateur_id", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Reservation
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
     * @ORM\Column(name="prix_reservation", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prixReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur_id;

    /**
     * @var App\Entity\Residence|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Residence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="residence_id", referencedColumnName="id")
     * })
     */
    private $residence;

    /**
     * @var App\Entity\Gestionnaireimmobilier|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Gestionnaireimmobilier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gestionnaire_immobilier_id", referencedColumnName="id")
     * })
     */
    private $gestionnaireImmobilier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixReservation(): ?string
    {
        return $this->prixReservation;
    }

    public function setPrixReservation(string $prixReservation): self
    {
        $this->prixReservation = $prixReservation;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getUtilisateur(): ?int
    {
        return $this->utilisateur_id;
    }

    public function setUtilisateur(?int $utilisateur_id): self
    {
        $this->utilisateur_id = $utilisateur_id;

        return $this;
    }

    public function getResidence(): ?Residence
    {
        return $this->residence;
    }

    public function setResidence(?Residence $residence): self
    {
        $this->residence = $residence;

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
