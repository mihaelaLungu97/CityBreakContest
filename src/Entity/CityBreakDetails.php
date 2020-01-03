<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityBreakDetailsRepository")
 */
class CityBreakDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cityBreak_Id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category_ID;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $title_country;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $airCompany;

    /**
     * @ORM\Column(type="string", length=254)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $stopDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $expiresAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $nrParticipanti;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCityBreakId(): ?int
    {
        return $this->cityBreak_Id;
    }

    public function setCityBreakId(int $cityBreak_Id): self
    {
        $this->cityBreak_Id = $cityBreak_Id;

        return $this;
    }

    public function getCategoryID(): ?Category
    {
        return $this->category_ID;
    }

    public function setCategoryID(?Category $category_ID): self
    {
        $this->category_ID = $category_ID;

        return $this;
    }

    public function getTitleCountry(): ?string
    {
        return $this->title_country;
    }

    public function setTitleCountry(string $title_country): self
    {
        $this->title_country = $title_country;

        return $this;
    }

    public function getAirCompany(): ?string
    {
        return $this->airCompany;
    }

    public function setAirCompany(string $airCompany): self
    {
        $this->airCompany = $airCompany;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getStopDate(): ?\DateTimeInterface
    {
        return $this->stopDate;
    }

    public function setStopDate(\DateTimeInterface $stopDate): self
    {
        $this->stopDate = $stopDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeInterface
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(\DateTimeInterface $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getNrParticipanti(): ?int
    {
        return $this->nrParticipanti;
    }

    public function setNrParticipanti(int $nrParticipanti): self
    {
        $this->nrParticipanti = $nrParticipanti;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(?bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }
    public function _toString(){
        return(string)$this->getId();
    }
}
