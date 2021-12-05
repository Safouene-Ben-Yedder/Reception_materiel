<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppeldoffrePcsds
 *
 * @ORM\Table(name="appeldoffre_pcsds", indexes={@ORM\Index(name="IDX_E71190B7FB88E14F", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
class AppeldoffrePcsds
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
     * @var int|null
     *
     * @ORM\Column(name="profile", type="integer", nullable=true)
     */
    private $profile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="profile_appel", type="integer", nullable=true)
     */
    private $profileAppel;

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
    private $marque;

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

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function setProfile(?int $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getProfileAppel(): ?int
    {
        return $this->profileAppel;
    }

    public function setProfileAppel(?int $profileAppel): self
    {
        $this->profileAppel = $profileAppel;

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

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

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
