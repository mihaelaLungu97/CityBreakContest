<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserDetailsRepository")
 */
class UserDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_ID;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $cnp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserID(): ?User
    {
        return $this->user_ID;
    }

    public function setUserID(User $user_ID): self
    {
        $this->user_ID = $user_ID;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCnp(): ?string
    {
        return $this->cnp;
    }

    public function setCnp(string $cnp): self
    {
        $this->cnp = $cnp;

        return $this;
    }
    public function _toString(){
        return(string)$this->getId();
    }
}
