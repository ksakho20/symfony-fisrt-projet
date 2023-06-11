<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $bookfisrt;

    /**
     * @ORM\Column(type="integer")
     */
    private $booksecond;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bookparis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookfisrt(): ?int
    {
        return $this->bookfisrt;
    }

    public function setBookfisrt(int $bookfisrt): self
    {
        $this->bookfisrt = $bookfisrt;

        return $this;
    }

    public function getBooksecond(): ?int
    {
        return $this->booksecond;
    }

    public function setBooksecond(int $booksecond): self
    {
        $this->booksecond = $booksecond;

        return $this;
    }

    public function getBookparis(): ?string
    {
        return $this->bookparis;
    }

    public function setBookparis(string $bookparis): self
    {
        $this->bookparis = $bookparis;

        return $this;
    }
}
