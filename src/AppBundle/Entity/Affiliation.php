<?php

namespace AppBundle\Entity;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 */
class Affiliation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $institutionName;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

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
    public function getInstitutionName()
    {
        return $this->institutionName;
    }

    /**
     * @param string $institutionName
     *
     * @return Affiliation
     */
    public function setInstitutionName($institutionName)
    {
        $this->institutionName = $institutionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return Affiliation
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Affiliation
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Affiliation
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}