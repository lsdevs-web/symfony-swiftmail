<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


class MonMail
{


    /**
     * @Assert\Email(message="Entrez une adresse email valide")
     */
    private $email;


    /**
     * @Assert\Length(
     *     min="50", minMessage="Le message doit faire au moins 50 caractères",
     *     max="255", maxMessage="Le message ne peut pas faire plus de 255 caractères"
     * )
     */
    private $content;


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

}
