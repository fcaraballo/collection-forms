<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 */
class Author
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var  string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var ArrayCollection|Affiliation[]
     */
    private $affiliations;

    public function __construct()
    {
        $this->affiliations = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return Author
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Author
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Affiliation[]
     */
    public function getAffiliations()
    {
        return $this->affiliations;
    }

    /**
     * @param Affiliation[] $affiliations
     *
     * @return Author
     */
    public function setAffiliations($affiliations)
    {
        $this->affiliations = $affiliations;

        return $this;
    }

    /**
     * @param Affiliation $affiliation
     *
     * @return bool
     */
    public function addAffiliation(Affiliation $affiliation)
    {
        if ($this->affiliations->contains($affiliation)) {
            return false;
        }

        // Will return always true so we will know if it was successful
        return $this->affiliations->add($affiliation);
    }

    /**
     * @param Affiliation $affiliation
     *
     * @return bool
     */
    public function removeAffiliation(Affiliation $affiliation)
    {
        // Will return true if the element is removed, false otherwise
        return $this->affiliations->removeElement($affiliation);
    }
}