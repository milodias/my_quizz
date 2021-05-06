<?php

namespace App\Entity;

use App\Repository\HistoriqueUserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistoriqueUserRepository::class)
 */
class HistoriqueUser
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
    private $id_user;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_quizz;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_consulted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdQuizz(): ?int
    {
        return $this->id_quizz;
    }

    public function setIdQuizz(int $id_quizz): self
    {
        $this->id_quizz = $id_quizz;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getDateConsulted(): ?\DateTimeInterface
    {
        return $this->date_consulted;
    }

    public function setDateConsulted(\DateTimeInterface $date_consulted): self
    {
        $this->date_consulted = $date_consulted;

        return $this;
    }
}
