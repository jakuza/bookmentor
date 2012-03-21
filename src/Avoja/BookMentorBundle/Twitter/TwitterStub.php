<?php

namespace Avoja\BookMentorBundle\Twitter;

class TwitterStub implements TwitterInterface
{
    public function getKeywordsFor($username)
    {
        $keywords = array(
            'jacoporomei' => array(
                'php',
                'cenerentola',
                'fuoco',
                'refactoring',
                'cyberpunk',
                'code',
            ),
            'pincopallino' => array(
                'Siddartha',
                'code',
                'C++',
            ),
        );
        
        return $keywords[$username];
    }
}
