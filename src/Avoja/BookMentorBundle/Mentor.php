<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    protected $twitter;
    
    public function __construct($twitter)
    {
        $this->twitter = $twitter;
    }
    
    public function getSuggestionsFor($username)
    {
        $books = array(
            'Cinderella',
            'Moby Dick',
            'Pro PHP Refactoring',
            'Monnalisa Cyberpunk',
            'La Divina Commedia',
            'Romeo & Juliet',
            'Test Driven Development by Example',
            'Pinocchio',
        );
        
        $keywords = $this->twitter->getKeywordsFor($username);
        
        $suggestions = array();
        
        foreach ($books as $book) {
            foreach ($keywords as $keyword) {
                if (false !== strpos(strtolower($book), strtolower($keyword))) {
                    $suggestions[] = $book;
                }
            }
        }
        
        return array_unique($suggestions);
    }
}
