<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntityBRepository")
 */
class EntityB
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
     * @ORM\ManyToMany(targetEntity="App\Entity\EntityA", mappedBy="entityB")
     */
    private $entityA;

    public function __construct()
    {
        $this->entityA = new ArrayCollection();
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
     * @return Collection|EntityA[]
     */
    public function getEntityA(): Collection
    {
        return $this->entityA;
    }

    public function addEntityA(EntityA $entityA): self
    {
        if (!$this->entityA->contains($entityA)) {
            $this->entityA[] = $entityA;
            $entityA->addEntityB($this);
        }

        return $this;
    }

    public function removeEntityA(EntityA $entityA): self
    {
        if ($this->entityA->contains($entityA)) {
            $this->entityA->removeElement($entityA);
            $entityA->removeEntityB($this);
        }

        return $this;
    }
}
