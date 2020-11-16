<?php

namespace App\Entity;

use App\Repository\FormateursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormateursRepository::class)
 */
class Formateurs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profil;

    /**
     * @ORM\OneToOne(targetEntity=user::class, cascade={"persist", "remove"})
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfil(): ?string
    {
        return $this->profil;
    }

    public function setProfil(string $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->User;
    }

    public function setUser(?user $User): self
    {
        $this->User = $User;

        return $this;
    }
}
