<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffredappelRouteur
 *
 * @ORM\Table(name="offredappel_routeur", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8E8400CD9BC614D6", columns={"appeldoffrerouteur_id"})}, indexes={@ORM\Index(name="IDX_8E8400CDFB88E14F", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
class OffredappelRouteur
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
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rapport", type="string", length=255, nullable=true)
     */
    private $rapport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resultat", type="string", length=255, nullable=true)
     */
    private $resultat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qr_code", type="string", length=255, nullable=true)
     */
    private $qrCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reference", type="integer", nullable=true)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre", type="integer", nullable=true)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valide", type="integer", nullable=true)
     */
    private $valide;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_ports", type="integer", nullable=true)
     */
    private $nbrPorts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vitesse_tel", type="string", length=255, nullable=true)
     */
    private $vitesseTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vitesse_sans_fil", type="string", length=255, nullable=true)
     */
    private $vitesseSansFil;

    /**
     * @var \AppeldoffreRouteur
     *
     * @ORM\ManyToOne(targetEntity="AppeldoffreRouteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="appeldoffrerouteur_id", referencedColumnName="id")
     * })
     */
    private $appeldoffrerouteur;

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

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

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

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(?string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    public function setQrCode(?string $qrCode): self
    {
        $this->qrCode = $qrCode;

        return $this;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(?int $reference): self
    {
        $this->reference = $reference;

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

    public function getValide(): ?int
    {
        return $this->valide;
    }

    public function setValide(?int $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getNbrPorts(): ?int
    {
        return $this->nbrPorts;
    }

    public function setNbrPorts(?int $nbrPorts): self
    {
        $this->nbrPorts = $nbrPorts;

        return $this;
    }

    public function getVitesseTel(): ?string
    {
        return $this->vitesseTel;
    }

    public function setVitesseTel(?string $vitesseTel): self
    {
        $this->vitesseTel = $vitesseTel;

        return $this;
    }

    public function getVitesseSansFil(): ?string
    {
        return $this->vitesseSansFil;
    }

    public function setVitesseSansFil(?string $vitesseSansFil): self
    {
        $this->vitesseSansFil = $vitesseSansFil;

        return $this;
    }

    public function getAppeldoffrerouteur(): ?AppeldoffreRouteur
    {
        return $this->appeldoffrerouteur;
    }

    public function setAppeldoffrerouteur(?AppeldoffreRouteur $appeldoffrerouteur): self
    {
        $this->appeldoffrerouteur = $appeldoffrerouteur;

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
