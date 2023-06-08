<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Locataire
 *
 * @ORM\Table(name="locataire")
 * @ORM\Entity
 */
class Locataire
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_piece_identite", type="string", length=50, nullable=false)
     */
    private $numeroPieceIdentite;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_loyer", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $montantLoyer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_paiement", type="date", nullable=true)
     */
    private $datePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_paiement", type="string", length=20, nullable=false)
     */
    private $typePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_mois_avance", type="integer", nullable=false)
     */
    private $nombreMoisAvance;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumeroPieceIdentite(): ?string
    {
        return $this->numeroPieceIdentite;
    }

    public function setNumeroPieceIdentite(string $numeroPieceIdentite): self
    {
        $this->numeroPieceIdentite = $numeroPieceIdentite;

        return $this;
    }

    public function getMontantLoyer(): ?string
    {
        return $this->montantLoyer;
    }

    public function setMontantLoyer(string $montantLoyer): self
    {
        $this->montantLoyer = $montantLoyer;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(?\DateTimeInterface $datePaiement): self
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

    public function getNombreMoisAvance(): ?int
    {
        return $this->nombreMoisAvance;
    }

    public function setNombreMoisAvance(int $nombreMoisAvance): self
    {
        $this->nombreMoisAvance = $nombreMoisAvance;

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


}
