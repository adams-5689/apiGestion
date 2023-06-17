<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use App\Entity\Reservation;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gestionnaireimmobilier
 *
 * @ORM\Table(name="gestionnaireimmobilier")
 * @ORM\Entity
 */
#[ApiResource()]
class Gestionnaireimmobilier
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_piece_identite", type="string", length=50, nullable=false)
     */
    private $numeroPieceIdentite;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob", length=65535, nullable=false)
     */
    private $photo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Agenceimmobilier", mappedBy="gestionnaire")
     */
    private $agence = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agence = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

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

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection<int, Agenceimmobilier>
     */
    public function getAgence(): Collection
    {
        return $this->agence;
    }

    public function addAgence(Agenceimmobilier $agence): self
    {
        if (!$this->agence->contains($agence)) {
            $this->agence->add($agence);
            $agence->addGestionnaire($this);
        }

        return $this;
    }

    public function removeAgence(Agenceimmobilier $agence): self
    {
        if ($this->agence->removeElement($agence)) {
            $agence->removeGestionnaire($this);
        }

        return $this;
    }

}
