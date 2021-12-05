<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffredappelPcsds
 *
 * @ORM\Table(name="offredappel_pcsds", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_B50B7411BF5D4478", columns={"appeldoffrepcsds_id"})}, indexes={@ORM\Index(name="IDX_B50B7411FB88E14F", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
class OffredappelPcsds
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
     * @var \AppeldoffrePcsds
     *
     * @ORM\ManyToOne(targetEntity="AppeldoffrePcsds")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="appeldoffrepcsds_id", referencedColumnName="id")
     * })
     */
    private $appeldoffrepcsds;

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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ram;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $storage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpu_cores;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpu_threads_par_core;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cpu_max_clock;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gpu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gpu_memory;

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


    public function getAppeldoffrepcsds(): ?AppeldoffrePcsds
    {
        return $this->appeldoffrepcsds;
    }

    public function setAppeldoffrepcsds(?AppeldoffrePcsds $appeldoffrepcsds): self
    {
        $this->appeldoffrepcsds = $appeldoffrepcsds;

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

    public function getRam(): ?string
    {
        return $this->ram;
    }

    public function setRam(?string $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getStorage(): ?string
    {
        return $this->storage;
    }

    public function setStorage(?string $storage): self
    {
        $this->storage = $storage;

        return $this;
    }

    public function getCpu(): ?string
    {
        return $this->cpu;
    }

    public function setCpu(?string $cpu): self
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getCpuCores(): ?string
    {
        return $this->cpu_cores;
    }

    public function setCpuCores(?string $cpu_cores): self
    {
        $this->cpu_cores = $cpu_cores;

        return $this;
    }

    public function getCpuThreadsParCore(): ?string
    {
        return $this->cpu_threads_par_core;
    }

    public function setCpuThreadsParCore(?string $cpu_threads_par_core): self
    {
        $this->cpu_threads_par_core = $cpu_threads_par_core;

        return $this;
    }

    public function getCpuMaxClock(): ?string
    {
        return $this->cpu_max_clock;
    }

    public function setCpuMaxClock(?string $cpu_max_clock): self
    {
        $this->cpu_max_clock = $cpu_max_clock;

        return $this;
    }

    public function getGpu(): ?string
    {
        return $this->gpu;
    }

    public function setGpu(?string $gpu): self
    {
        $this->gpu = $gpu;

        return $this;
    }

    public function getGpuMemory(): ?string
    {
        return $this->gpu_memory;
    }

    public function setGpuMemory(?string $gpu_memory): self
    {
        $this->gpu_memory = $gpu_memory;

        return $this;
    }


}
