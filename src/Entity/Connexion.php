<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Administrateur;
use App\Entity\Locataire;
use App\Entity\Gestionnaireimmobilier;
use App\Entity\Agenceimmobilier;


use Doctrine\ORM\Mapping as ORM;

/**
 * Connexion
 *
 * @ORM\Table(name="connexion", indexes={@ORM\Index(name="gestionnaire_immobilier_id", columns={"gestionnaire_immobilier_id"}), @ORM\Index(name="locataire_id", columns={"locataire_id"}), @ORM\Index(name="administrateur_id", columns={"administrateur_id"}), @ORM\Index(name="utilisateur_id", columns={"utilisateur_id"}), @ORM\Index(name="agence_immobiliere_id", columns={"agence_immobiliere_id"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Connexion
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
     * @ORM\Column(name="nom_utilisateur", type="string", length=50, nullable=false)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=100, nullable=false)
     */
    private $motDePasse;

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
     * @var App\Entity\Agenceimmobilier|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Agenceimmobilier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agence_immobiliere_id", referencedColumnName="id")
     * })
     */
    private $agenceImmobiliere;

    /**
     * @var App\Entity\Locataire|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Locataire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locataire_id", referencedColumnName="id")
     * })
     */
    private $locataire;

    /**
     * @var App\Entity\Utilisateur|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;

    /**
     * @var App\Entity\Administrateur|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Administrateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="administrateur_id", referencedColumnName="id")
     * })
     */
    private $administrateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): self
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

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

    public function getAgenceImmobiliere(): ?Agenceimmobilier
    {
        return $this->agenceImmobiliere;
    }

    public function setAgenceImmobiliere(?Agenceimmobilier $agenceImmobiliere): self
    {
        $this->agenceImmobiliere = $agenceImmobiliere;

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

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getAdministrateur(): ?Administrateur
    {
        return $this->administrateur;
    }

    public function setAdministrateur(?Administrateur $administrateur): self
    {
        $this->administrateur = $administrateur;

        return $this;
    }


}
