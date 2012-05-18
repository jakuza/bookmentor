<?php

namespace Avoja\BookMentorBundle\Tests\Stub;

class Twitter 
{
    public function getKeywordsFor($username)
    {
        return array(
            'cinderella',
            'moby',
            'refactoring',
            'php',
        );
    }
}
