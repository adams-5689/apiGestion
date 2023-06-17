<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Agenceimmobilier
 *
 * @ORM\Table(name="agenceimmobilier")
 * @ORM\Entity
 */
#[ApiResource()]
class Agenceimmobilier
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
     * @ORM\Column(name="nom_entreprise", type="string", length=100, nullable=false)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_immatriculation", type="string", length=50, nullable=false)
     */
    private $numeroImmatriculation;

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
     * @var string
     *
     * @ORM\Column(name="numero_telephone", type="string", length=20, nullable=false)
     */
    private $numeroTelephone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Gestionnaireimmobilier", inversedBy="agence")
     * @ORM\JoinTable(name="agencegestionnaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="agence_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="gestionnaire_id", referencedColumnName="id")
     *   }
     * )
     */
    private $gestionnaire = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gestionnaire = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    public function setNomEntreprise(string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    public function getNumeroImmatriculation(): ?string
    {
        return $this->numeroImmatriculation;
    }

    public function setNumeroImmatriculation(string $numeroImmatriculation): self
    {
        $this->numeroImmatriculation = $numeroImmatriculation;

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

    public function getNumeroTelephone(): ?string
    {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone(string $numeroTelephone): self
    {
        $this->numeroTelephone = $numeroTelephone;

        return $this;
    }

    /**
     * @return Collection<int, Gestionnaireimmobilier>
     */
    public function getGestionnaire(): Collection
    {
        return $this->gestionnaire;
    }

    public function addGestionnaire(Gestionnaireimmobilier $gestionnaire): self
    {
        if (!$this->gestionnaire->contains($gestionnaire)) {
            $this->gestionnaire->add($gestionnaire);
        }

        return $this;
    }

    public function removeGestionnaire(Gestionnaireimmobilier $gestionnaire): self
    {
        $this->gestionnaire->removeElement($gestionnaire);

        return $this;
    }

}
