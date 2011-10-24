<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    private function match($books, $keywords)
    {
        $suggestions = array();
        foreach ($keywords as $keyword)
        {
            foreach ($books as $book)
            {
                if (false !== strpos(strtolower($book), strtolower($keyword)))
                {
                    $suggestions[] = $book;
                }
            }
        }
        
        return array_unique($suggestions);
    }
    
    public function suggestFor($username)
    {
        $books = array(
            'Pingo pingo',
            'Jumabo',
            'The Lord of the Rings',
            'Pro PHP Refactoring',
            'Casanova',
            'Cinderella',
        );
        
        $twitter_keywords = array('refactoring', 'mountain', 'sail', 'cinderella', 'pingo');
        
        return $this->match($books, $twitter_keywords);
    }
}