<?php

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Avoja\BookMentorBundle\BusinessLogic\Mentor;

class SuggestionController extends Controller 
{
    /**
     * @Route("/suggestions/{username}")
     */
    public function indexAction($username)
    {
        $twitter = $this->get('twitter');
        
        $suggestions = $this->getDoctrine()
            ->getRepository('AvojaBookMentorBundle:Book')
            ->findByKeywords($twitter->getKeywords($username));
        
        return $this->render('AvojaBookMentorBundle:Suggestion:index.html.twig', array('suggestions' => $suggestions));
    }
    
}
