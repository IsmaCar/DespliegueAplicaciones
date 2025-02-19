<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosICM")]
class TablaICM
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $fraseICM;
    public function getId(): int
    {
        return $this->id;
    }
    public function getFraseICM(): string
    {
        return $this->fraseICM;
    }

    // Setter para $fraseICM
    public function setFraseICM(string $fraseICM): self
    {
        $this->fraseICM = $fraseICM;
        return $this;
    }
}
?>