<?php

namespace App\Entity;

use App\Entity\Gestionnaireimmobilier;
use App\Entity\Locataire;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement", indexes={@ORM\Index(name="locataire_id", columns={"locataire_id"}), @ORM\Index(name="gestionnaire_immobilier_id", columns={"gestionnaire_immobilier_id"})})
 * @ORM\Entity
 */
class Paiement
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
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_paiement", type="date", nullable=false)
     */
    private $datePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_paiement", type="string", length=20, nullable=false)
     */
    private $typePaiement;

    /**
     * @var App\Entity\Gestionnaireimmobilier|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Gestionnaireimmobilier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gestionnaire_immobilier_id", referencedColumnName="id")
     * })
     */
    private $gestionnaireImmobilier;

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

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getTypePaiement(): ?string
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(string $typePaiement): self
    {
        $this->typePaiement = $typePaiement;

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
