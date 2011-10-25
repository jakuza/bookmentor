<?php

namespace Avoja\BookMentorBundle\Tests\Stub;

class TwitterStub implements \Avoja\BookMentorBundle\TwitterInterface
{
    public function getKeywords($username)
    {
        return array(
            'motorbike',
            'refactoring',
            'stivali',
            'code',
            'php',
        );
    }
}
