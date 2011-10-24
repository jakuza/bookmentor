<?php

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SuggestionController extends Controller 
{
    /**
     * @Route("/suggestions/{username}")
     */
    public function indexAction()
    {
        $suggestions = array(
            'Pro PHP Refactoring',
            'Cinderella',
            'Matchu Pitchu',
        );
        
        return $this->render('AvojaBookMentorBundle:Suggestion:index.html.twig', array('suggestions' => $suggestions));
    }
    
}
