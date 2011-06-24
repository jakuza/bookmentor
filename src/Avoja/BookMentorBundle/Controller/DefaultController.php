<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Avoja\BookMentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/suggest", name="_bookmentor")
     * 
     * @return Response 
     */
    public function indexAction()
    {
        $form = $this->createForm(new \Avoja\BookMentorBundle\Form\Suggestion());
        
        $suggestions = array();
        
        $request = $this->get('request');
        if ($request->query->get('suggestion')) {
            $suggestions = array(
                'The Little Mermaid', 
                'Pro PHP Refactoring',
                'The Hitchhiker\'s Guide to the Galaxy'
            );
        }
        
        return $this->render('AvojaBookMentorBundle:Default:index.html.twig', 
                array('form' => $form->createView(), 'suggestions' => $suggestions));
    }
}

