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
            'El Cid',
            'Don Quijote',
            'Tirant Lo Blanch',
            'La Divina Commedia',
            'Pro PHP Refactoring',
            'Moby Dick',
        );
        
        $keywords = $this->twitter->getKeyWordsFor($username);
        
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
