<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    protected $twitter;
    
    public function __construct(\Avoja\BookMentorBundle\Twitter\TwitterInterface $twitter)
    {
        $this->twitter = $twitter;
    }

    public function getSuggestions($username)
    {
        if (empty($username)) {
            throw new \Exception;
        }

        $books = array(
            'Moby Dick',
            'Pro PHP Refactoring',
            'Cenerentola',
            'Triplo',
            'Cronache del ghiaccio e del fuoco',
            'Siddartha',
            'Clean code',
            'C++ for dummies',
            'La Divina Commedia',
            'Monnalisa Cyberpunk',
            'Barnum',
        );

        $keywords = $this->twitter->getKeywordsFor($username);
        
        $suggestions = array();
        foreach($keywords as $keyword) {
            foreach ($books as $book) {
                if (false !== strpos(strtolower($book), strtolower($keyword))) {
                    $suggestions[] = $book;
                }
            }
        }
        
        return array_unique($suggestions);
    }
}

