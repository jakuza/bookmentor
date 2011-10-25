<?php

namespace Avoja\BookMentorBundle\Tests\Stub;

class BookRepositoryStub 
{
    public function getBooksByKeywords()
    {
        return array(
            'Pro PHP Refactoring',
            'Il gatto con gli stivali',
            'Clean code',
        );
    }
}