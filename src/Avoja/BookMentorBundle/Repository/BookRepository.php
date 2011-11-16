<?php

namespace Avoja\BookMentorBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function findByKeywords($keywords)
    {
        return array(
            new \Avoja\BookMentorBundle\Entity\Book('Pro PHP Refactoring'),
            new \Avoja\BookMentorBundle\Entity\Book('Cenerentola'),
            new \Avoja\BookMentorBundle\Entity\Book('Alice in wonderland'),
        );
    }
}
