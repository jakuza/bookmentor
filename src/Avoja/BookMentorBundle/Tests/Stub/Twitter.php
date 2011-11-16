<?php

namespace Avoja\BookMentorBundle\Tests\Stub;

class Twitter implements \Avoja\BookMentorBundle\TwitterInterface
{
    public function getKeywords($username) {
        if ($username == 'jacoporomei') {
            return array(
                'PHP',
                'refactoring',
                'biancaneve',
                'pasta',
                'ceci',
                'alice',
                'gigio',
            );
        }
    }
}
