<?php

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SuggestionController extends Controller 
{
    /**
     * 
     */
    public function indexAction()
    {
        
        return $this->render('AvojaBookMentorBundle:Suggestion:index.html.twig');
    }
    
}
