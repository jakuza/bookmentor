<?php

namespace Avoja\BookMentorBundle\Tests\Stub;

class Twitter 
{
    public function getKeywords($username)
    {
        return array(
            'php',
            'hockey',
            'sailing',
            'cuisine',
            'barcelona',
            'catalunya',
            'cid',
        );
    }
}
