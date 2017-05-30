<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Author;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 */
class AuthorFactory
{
    /**
     * @return Author
     */
    public function create()
    {
        $author = new Author();

        return $author;
    }

    /**
     * @return Author
     */
    public function createWithFakeData()
    {
        $author = $this->create();

        $author
            ->setName('Fernando')
            ->setLastName('Caraballo Ortiz')
            ->setEmail('caraballo.ortiz@gmail.com');

        return $author;
    }
}