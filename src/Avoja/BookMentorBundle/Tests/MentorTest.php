<?php

namespace Avoja\BookMentorBundle\Tests;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testSuggestions()
    {
        $expectation = array(
            'cinderella',
            'moby',
            'refactoring',
            'php',
        );
        
        $twitter = $this->getMock('\Avoja\BookMentorBundle\Tests\Stub\Twitter');
        $twitter->expects($this->once())
            ->method('getKeywordsFor')
            ->with('jacoporomei')
            ->will($this->returnValue($expectation));
        
        $mentor = new \Avoja\BookMentorBundle\Mentor($twitter);
        
        $suggestions = $mentor->getSuggestionsFor('jacoporomei');
        
        $this->assertTrue(is_array($suggestions));
    }
}