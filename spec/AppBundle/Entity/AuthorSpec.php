<?php

namespace spec\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use AppBundle\Entity\Affiliation;
use AppBundle\Entity\Author;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 *
 * @mixin Author
 */
class AuthorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Author::class);
    }

    function its_name_is_mutable()
    {
        $this->setName('Fernando');

        $this->getName()->shouldReturn('Fernando');
    }

    function its_email_is_mutable()
    {
        $this->setEmail('text@example.com');

        $this->getEmail()->shouldReturn('text@example.com');
    }

    function its_last_name_is_mutable()
    {
        $this->setLastName('Caraballo Ortiz');

        $this->getLastName()->shouldReturn('Caraballo Ortiz');
    }

    function its_affiliations_are_mutable(Affiliation $sevilleUniversity, Affiliation $westminsterUniversity)
    {
        $affiliations = [$sevilleUniversity, $westminsterUniversity];

        $this->setAffiliations($affiliations);

        $this->getAffiliations()->shouldReturn($affiliations);
    }

    function it_adds_affiliations(Affiliation $sevilleUniversity)
    {
        $this->getAffiliations()->shouldBeEmpty();

        $this->addAffiliation($sevilleUniversity);

        $this->getAffiliations()->shouldContain($sevilleUniversity);
    }

    function it_removes_affiliations(Affiliation $sevilleUniversity)
    {
        $this->addAffiliation($sevilleUniversity);
        $this->getAffiliations()->shouldContain($sevilleUniversity);

        $this->removeAffiliation($sevilleUniversity);
        $this->getAffiliations()->shouldNotContain($sevilleUniversity);
    }

    function it_has_fluent_interface()
    {
        $this->setEmail('test@example.com')->shouldReturn($this);
        $this->setLastName('Caraballo')->shouldReturn($this);
        $this->setName('Fernando')->shouldReturn($this);
        $this->setAffiliations(Argument::any())->shouldReturn($this);
    }
}