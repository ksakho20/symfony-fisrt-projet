<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoomRepository::class)
 */
class Room
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
    private $roomMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $roomNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roomHautGamme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roomConfort;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomMax(): ?string
    {
        return $this->roomMax;
    }

    public function setRoomMax(string $roomMax): self
    {
        $this->roomMax = $roomMax;

        return $this;
    }

    public function getRoomNumber(): ?int
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(int $roomNumber): self
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    public function getRoomHautGamme(): ?string
    {
        return $this->roomHautGamme;
    }

    public function setRoomHautGamme(?string $roomHautGamme): self
    {
        $this->roomHautGamme = $roomHautGamme;

        return $this;
    }

    public function getRoomConfort(): ?string
    {
        return $this->roomConfort;
    }

    public function setRoomConfort(string $roomConfort): self
    {
        $this->roomConfort = $roomConfort;

        return $this;
    }
}
