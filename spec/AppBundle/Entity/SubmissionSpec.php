<?php

namespace spec\AppBundle\Entity;

use AppBundle\Entity\Submission;
use Doctrine\Common\Collections\ArrayCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use AppBundle\Entity\Affiliation;
use AppBundle\Entity\Author;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 *
 * @mixin Submission
 */
class SubmissionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Submission::class);
    }

    function its_author_is_mutable(Author $author)
    {
        $this->setAuthor($author);

        $this->getAuthor()->shouldReturn($author);
    }

    function its_coauthors_is_mutable(Author $author1, Author $author2)
    {
        $coAuthors = new ArrayCollection([$author1, $author2]);

        $this->setCoAuthors($coAuthors);

        $this->getCoAuthors()->shouldReturn($coAuthors);
    }

    function it_adds_coauthors(Author $author)
    {
        $this->getCoAuthors()->shouldBeEmpty();

        $this->addCoAuthor($author);

        $this->getCoAuthors()->shouldContain($author);
    }

    function it_removes_affiliations(Author $author)
    {
        $this->addCoAuthor($author);
        $this->getCoAuthors()->shouldContain($author);

        $this->removeCoAuthor($author);
        $this->getCoAuthors()->shouldNotContain($author);
    }

    function it_has_fluent_interface(
        Author $author,
        Author $coAuthor1,
        Author $coAuthor2
    ) {
        $coAuthors = new ArrayCollection([$coAuthor1, $coAuthor2]);

        $this->setAuthor($author)->shouldReturn($this);
        $this->setCoAuthors($coAuthors)->shouldReturn($this);
    }
}