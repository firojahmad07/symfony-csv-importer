<?php

namespace App\Entity;

use App\Repository\RunnersRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: RunnersRepository::class)]
#[ApiResource]
class Runners
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $FullName = null;

    #[ORM\Column(length: 50)]
    private ?string $Distance = null;

    #[ORM\Column(length: 10)]
    private ?string $time = null;

    #[ORM\Column(length: 10)]
    private ?string $AgeCategory = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->FullName;
    }

    public function setFullName(string $FullName): static
    {
        $this->FullName = $FullName;

        return $this;
    }

    public function getDistance(): ?string
    {
        return $this->Distance;
    }

    public function setDistance(string $Distance): static
    {
        $this->Distance = $Distance;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): static
    {
        $this->time = $time;

        return $this;
    }

    public function getAgeCategory(): ?string
    {
        return $this->AgeCategory;
    }

    public function setAgeCategory(string $AgeCategory): static
    {
        $this->AgeCategory = $AgeCategory;

        return $this;
    }
}
