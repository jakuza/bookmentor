<?php

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SuggestionController extends Controller 
{
    /**
     * @Route("/suggestions/{username}")
     */
    public function indexAction($username)
    {
        $mentor = new \Avoja\BookMentorBundle\Mentor($this->get('twitter'));
        
        $suggestions = $mentor->getSuggestions($username);
        
        return $this->render('AvojaBookMentorBundle:Suggestion:index.html.twig',
            array('suggestions' => $suggestions)
        );
    }
    
}
