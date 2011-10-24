<?php

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Avoja\BookMentorBundle\Tests\Stub\TwitterStub;

class SuggestionController extends Controller 
{
    /**
     * @Route("/suggestions/{username}")
     */
    public function indexAction($username)
    {
        $mentor = new \Avoja\BookMentorBundle\Mentor(new TwitterStub());
        $suggestions = $mentor->suggestFor($username);
        
        return $this->render('AvojaBookMentorBundle:Suggestion:index.html.twig', array('suggestions' => $suggestions));
    }
    
}
