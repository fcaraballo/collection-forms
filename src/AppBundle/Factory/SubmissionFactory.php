<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Author;
use AppBundle\Entity\Submission;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 */
class SubmissionFactory
{
    /**
     * @return Submission
     */
    public function create()
    {
        $submission = new Submission();

        return $submission;
    }

    /**
     * @param Author $author
     *
     * @return Submission
     */
    public function createWithAuthor(Author $author)
    {
        $submission = $this->create();

        $submission->setAuthor($author);

        return $submission;
    }
}