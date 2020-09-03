<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $adult_tickets;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $child_tickets;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reservation_date;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdultTickets(): ?int
    {
        return $this->adult_tickets;
    }

    public function setAdultTickets(int $adult_tickets): self
    {
        $this->adult_tickets = $adult_tickets;

        return $this;
    }

    public function getChildTickets(): ?int
    {
        return $this->child_tickets;
    }

    public function setChildTickets(?int $child_tickets): self
    {
        $this->child_tickets = $child_tickets;

        return $this;
    }

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservation_date;
    }

    public function setReservationDate(\DateTimeInterface $reservation_date): self
    {
        $this->reservation_date = $reservation_date;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
