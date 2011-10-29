<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    public function __construct($twitter)
    {
        $this->twitter = $twitter;
    }
    
    public function getSuggestions($username)
    {
        $books = array(
            'Cinderella',
            'Pro PHP Refactoring',
            'El Cid',
            'Don Quijote',
            'HTML 5 with Lynx',
            'Hockey and cuisine',
            'Visiting Uruguay',
        );
        
        $keywords = $this->twitter->getKeywords($username);
        
        $suggestions = array();
        foreach ($books as $book)
        {
            foreach ($keywords as $keyword) {
                if (false !== strpos(strtolower($book), strtolower($keyword)))
                {
                    $suggestions[] = $book;
                }
            }
        }
        
        return array_unique($suggestions);
    }
}
