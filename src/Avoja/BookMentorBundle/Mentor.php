<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    public function suggest($username)
    {
        $books = array(
            'Cenerentola', 
            'Siddartha',
            'Pro PHP Refactoring',
            'Guida galattica per autostoppisti', 
            'I promessi sposi',
            'Refactoring',
            'I Malavoglia',
            'Fight Club',
            'La biologia delle credenze', // ISBN per Jacopo
        );
        
        $keywords = array(
            'jacoporomei' => array('cenerentola', 'siddartha', 'php'),
            'pincopallino' => array('galattica', 'sposi', 'refactoring'),
        );
        
        $suggestions = array();
        foreach ($keywords[$username] as $keyword) {
            foreach ($books as $book) {
                if (false !== strpos(strtolower($book), strtolower($keyword))) {
                    $suggestions[] = $book;
                }
            }
        }
        
        return array_unique($suggestions);
    }
}