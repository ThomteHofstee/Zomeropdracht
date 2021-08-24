<?php

namespace App\Entity;

use App\Repository\DocentenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocentenRepository::class)
 */
class Docenten
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
    private $Voornaam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Achternaam;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tussenvoegsel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Mentor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoornaam(): ?string
    {
        return $this->Voornaam;
    }

    public function setVoornaam(string $Voornaam): self
    {
        $this->Voornaam = $Voornaam;

        return $this;
    }

    public function getAchternaam(): ?string
    {
        return $this->Achternaam;
    }

    public function setAchternaam(string $Achternaam): self
    {
        $this->Achternaam = $Achternaam;

        return $this;
    }

    public function getTussenvoegsel(): ?string
    {
        return $this->tussenvoegsel;
    }

    public function setTussenvoegsel(?string $tussenvoegsel): self
    {
        $this->tussenvoegsel = $tussenvoegsel;

        return $this;
    }

    public function getMentor(): ?bool
    {
        return $this->Mentor;
    }

    public function setMentor(bool $Mentor): self
    {
        $this->Mentor = $Mentor;

        return $this;
    }
}
