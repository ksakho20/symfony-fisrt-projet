<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 */
class Review
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
    private $appt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $confirmation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $duree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppt(): ?string
    {
        return $this->appt;
    }

    public function setAppt(string $appt): self
    {
        $this->appt = $appt;

        return $this;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }
}
