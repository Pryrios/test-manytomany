<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntityARepository")
 */
class EntityA
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\EntityB", inversedBy="entityA")
     */
    private $entityB;

    public function __construct()
    {
        $this->entityB = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|EntityB[]
     */
    public function getEntityB(): Collection
    {
        return $this->entityB;
    }

    public function addEntityB(EntityB $entityB): self
    {
        if (!$this->entityB->contains($entityB)) {
            $this->entityB[] = $entityB;
        }

        return $this;
    }

    public function removeEntityB(EntityB $entityB): self
    {
        if ($this->entityB->contains($entityB)) {
            $this->entityB->removeElement($entityB);
        }

        return $this;
    }
}
