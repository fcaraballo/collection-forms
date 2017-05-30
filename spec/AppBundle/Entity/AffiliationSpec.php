<?php

namespace spec\AppBundle\Entity;

use PhpSpec\ObjectBehavior;
use AppBundle\Entity\Affiliation;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 *
 * @mixin Affiliation
 */
class AffiliationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Affiliation::class);
    }

    function its_institution_name_is_mutable()
    {
        $this->setInstitutionName('University of Seville');

        $this->getInstitutionName()->shouldReturn('University of Seville');
    }

    function its_address_is_mutable()
    {
        $this->setAddress('Pall Mall');

        $this->getAddress()->shouldReturn('Pall Mall');
    }

    function its_country_is_mutable()
    {
        $this->setCountry('United Kingdom');

        $this->getCountry()->shouldReturn('United Kingdom');
    }

    function its_city_is_mutable()
    {
        $this->setCity('London');

        $this->getCity()->shouldReturn('London');
    }

    function it_has_fluent_interface()
    {
        $this->setAddress('Pall Mall')->shouldReturn($this);
        $this->setCity('London')->shouldReturn($this);
        $this->setCountry('United Kingdom')->shouldReturn($this);
        $this->setInstitutionName('AGC Partners')->shouldReturn($this);
    }
}