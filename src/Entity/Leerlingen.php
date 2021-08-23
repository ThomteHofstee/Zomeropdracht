<?php

namespace App\Entity;

use App\Repository\LeerlingenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LeerlingenRepository::class)
 */
class Leerlingen
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
    private $Tussenvoegsel;

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
        return $this->Tussenvoegsel;
    }

    public function setTussenvoegsel(?string $Tussenvoegsel): self
    {
        $this->Tussenvoegsel = $Tussenvoegsel;

        return $this;
    }
}
