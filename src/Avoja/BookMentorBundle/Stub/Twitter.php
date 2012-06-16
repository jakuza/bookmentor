<?php

namespace Avoja\BookMentorBundle\Stub;

use Avoja\BookMentorBundle\TwitterInterface;

class Twitter implements TwitterInterface
{
    public function getKeywordsFor($username)
    {
        return array(
            'php',
            'refactoring',
            'quijote',
            'el',
        );
    }
}