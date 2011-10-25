<?php

namespace Avoja\BookMentorBundle;

class Mentor
{
    /**
     * @var TwitterInterface
     */
    private $twitter;
    
    private $repository;
    
    public function __construct(TwitterInterface $twitter, $book_repository)
    {
        $this->twitter = $twitter;
        $this->repository = $book_repository;
    }
    
    public function getSuggestions($username)
    {
        $suggestions = $this->repository->getBooksByKeywords($this->twitter->getKeywords($username));
        
        return array_unique($suggestions);
    }
}