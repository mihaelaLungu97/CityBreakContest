<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserCityBreakDetailsRepository")
 */
class UserCityBreakDetails
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
    private $id_UserCity;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_User;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CityBreakDetails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_CityBreak;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUserCity(): ?int
    {
        return $this->id_UserCity;
    }

    public function setIdUserCity(int $id_UserCity): self
    {
        $this->id_UserCity = $id_UserCity;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_User;
    }

    public function setIdUser(?User $id_User): self
    {
        $this->id_User = $id_User;

        return $this;
    }

    public function getIdCityBreak(): ?CityBreakDetails
    {
        return $this->id_CityBreak;
    }

    public function setIdCityBreak(?CityBreakDetails $id_CityBreak): self
    {
        $this->id_CityBreak = $id_CityBreak;

        return $this;
    }
    public function _toString(){
        return(string)$this->getId();
    }
}
