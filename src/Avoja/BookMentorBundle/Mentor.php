<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{

    public function suggestFor()
    {
        return array(
            'The Tao of Physics', 
            'Pro PHP Refactoring',
            'The Hitchhiker\'s Guide to the Galaxy'
        );
    }
}
