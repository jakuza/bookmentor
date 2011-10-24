<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    public function suggestFor($username)
    {
        $suggestions = array(
            'Pingo pingo',
            'Pro PHP Refactoring',
            'Cinderella',
        );
        
        return $suggestions;
    }
}