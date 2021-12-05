<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppeldoffrePcperso
 *
 * @ORM\Table(name="appeldoffre_pcperso", indexes={@ORM\Index(name="IDX_3D937FABFB88E14F", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
class AppeldoffrePcperso
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
     * @ORM\Column(name="ram", type="string", length=255, nullable=true)
     */
    private $ram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="storage", type="string", length=255, nullable=true)
     */
    private $storage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpu", type="string", length=255, nullable=true)
     */
    private $cpu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpu_cores", type="string", length=255, nullable=true)
     */
    private $cpuCores;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpu_threads_par_core", type="string", length=255, nullable=true)
     */
    private $cpuThreadsParCore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpu_max_clock", type="string", length=255, nullable=true)
     */
    private $cpuMaxClock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpu", type="string", length=255, nullable=true)
     */
    private $gpu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpu_memory", type="string", length=255, nullable=true)
     */
    private $gpuMemory;

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
        return $this->cpuCores;
    }

    public function setCpuCores(?string $cpuCores): self
    {
        $this->cpuCores = $cpuCores;

        return $this;
    }

    public function getCpuThreadsParCore(): ?string
    {
        return $this->cpuThreadsParCore;
    }

    public function setCpuThreadsParCore(?string $cpuThreadsParCore): self
    {
        $this->cpuThreadsParCore = $cpuThreadsParCore;

        return $this;
    }

    public function getCpuMaxClock(): ?string
    {
        return $this->cpuMaxClock;
    }

    public function setCpuMaxClock(?string $cpuMaxClock): self
    {
        $this->cpuMaxClock = $cpuMaxClock;

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
        return $this->gpuMemory;
    }

    public function setGpuMemory(?string $gpuMemory): self
    {
        $this->gpuMemory = $gpuMemory;

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
