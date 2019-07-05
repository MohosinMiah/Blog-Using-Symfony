<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TblAuthorRepository")
 */
class TblAuthor
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TblPost", mappedBy="author_id", orphanRemoval=true)
     */
    private $tblPosts;

    public function __construct()
    {
        $this->tblPosts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|TblPost[]
     */
    public function getTblPosts(): Collection
    {
        return $this->tblPosts;
    }

    public function addTblPost(TblPost $tblPost): self
    {
        if (!$this->tblPosts->contains($tblPost)) {
            $this->tblPosts[] = $tblPost;
            $tblPost->setAuthorId($this);
        }

        return $this;
    }

    public function removeTblPost(TblPost $tblPost): self
    {
        if ($this->tblPosts->contains($tblPost)) {
            $this->tblPosts->removeElement($tblPost);
            // set the owning side to null (unless already changed)
            if ($tblPost->getAuthorId() === $this) {
                $tblPost->setAuthorId(null);
            }
        }

        return $this;
    }
}
