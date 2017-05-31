<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 */
class Submission
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Author
     */
    private $author;

    /**
    * @var Author[]
    */
    private $coAuthors;

    public function __construct()
    {
        $this->coAuthors = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @param Author $author
     *
     * @return $submission
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return ArrayCollection|Author[]
     */
    public function getCoAuthors(): ArrayCollection
    {
        return $this->coAuthors;
    }

    /**
     * @param ArrayCollection|Author[] $coAuthors
     *
     * @return $submission
     */
    public function setCoAuthors($coAuthors)
    {
        $this->coAuthors = $coAuthors;

        return $this;
    }

    /**
     * @param Author $coAuthor
     *
     * @return bool
     */
    public function addCoAuthor(Author $coAuthor)
    {
        if ($this->coAuthors->contains($coAuthor)) {
            return false;
        }

        // Will return always true so we will know if it was successful
        return $this->coAuthors->add($coAuthor);
    }

    /**
     * @param Author $coAuthor
     *
     * @return bool
     */
    public function removeCoAuthor(Author $coAuthor)
    {
        // Will return true if the element is removed, false otherwise
        return $this->coAuthors->removeElement($coAuthor);
    }
}
