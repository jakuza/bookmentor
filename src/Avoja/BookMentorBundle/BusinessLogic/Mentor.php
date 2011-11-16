<?php

namespace Avoja\BookMentorBundle\BusinessLogic;

class Mentor 
{
    /**
     *
     * @var TwitterInterface
     */
    private $twitter;
    
    public function __construct(\Avoja\BookMentorBundle\TwitterInterface $twitter)
    {
        $this->twitter = $twitter;
    }
    
    public function getSuggestions($username, $books)
    {
        $keywords = $this->twitter->getKeywords($username);
                
        $suggestions = array();
        foreach ($keywords as $keyword) {
            foreach ($books as $book) {
                if (false !== strpos(strtolower($book->getTitle()), strtolower($keyword))) {
                    $suggestions[] = $book->getTitle();
                }
            }
        }

        return array_unique($suggestions);
    }
}
