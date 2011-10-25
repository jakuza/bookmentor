<?php

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Avoja\BookMentorBundle\Mentor;

class SuggestionController extends Controller 
{
    /**
     * @Route("/suggestions/{username}")
     */
    public function indexAction($username)
    {
        $twitter = $this->get('twitter');
        $repo = $this->get('book_repository');
        
        $mentor = new Mentor($twitter, $repo);
        $suggestions = $mentor->getSuggestions($username);
        
        return $this->render('AvojaBookMentorBundle:Suggestion:index.html.twig', array('suggestions' => $suggestions));
    }
    
}
