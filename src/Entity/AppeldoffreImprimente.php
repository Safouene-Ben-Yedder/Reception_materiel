<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppeldoffreImprimente
 *
 * @ORM\Table(name="appeldoffre_imprimente", indexes={@ORM\Index(name="IDX_B773EB49FB88E14F", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
class AppeldoffreImprimente
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
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_limite", type="date", nullable=true)
     */
    private $dateLimite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validation", type="date", nullable=true)
     */
    private $dateValidation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre", type="integer", nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="technologie_impression", type="string", length=255, nullable=true)
     */
    private $technologieImpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vitesse_impression", type="string", length=255, nullable=true)
     */
    private $vitesseImpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resolution_impression", type="string", length=255, nullable=true)
     */
    private $resolutionImpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rapport", type="string", length=255, nullable=true)
     */
    private $rapport;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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

    public function getDateLimite(): ?\DateTimeInterface
    {
        return $this->dateLimite;
    }

    public function setDateLimite(?\DateTimeInterface $dateLimite): self
    {
        $this->dateLimite = $dateLimite;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->dateValidation;
    }

    public function setDateValidation(?\DateTimeInterface $dateValidation): self
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getTechnologieImpression(): ?string
    {
        return $this->technologieImpression;
    }

    public function setTechnologieImpression(?string $technologieImpression): self
    {
        $this->technologieImpression = $technologieImpression;

        return $this;
    }

    public function getVitesseImpression(): ?string
    {
        return $this->vitesseImpression;
    }

    public function setVitesseImpression(?string $vitesseImpression): self
    {
        $this->vitesseImpression = $vitesseImpression;

        return $this;
    }

    public function getResolutionImpression(): ?string
    {
        return $this->resolutionImpression;
    }

    public function setResolutionImpression(?string $resolutionImpression): self
    {
        $this->resolutionImpression = $resolutionImpression;

        return $this;
    }

    public function getRapport(): ?string
    {
        return $this->rapport;
    }

    public function setRapport(?string $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateurs
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateurs $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }


}
