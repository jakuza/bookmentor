<?php

namespace Avoja\BookMentorBundle\Tests\Stub;

class TwitterStub
{
    public function getKeywords($username)
    {
        return array('refactoring', 'mountain', 'sail', 'cinderella', 'pingo');
    }
}

