<?php

namespace Avoja\BookMentorBundle\Tests;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testSuggestions()
    {
        $expectation = array(
            'php',
            'refactoring',
            'quijote',
            'el',
        );
        
        $twitter = $this->getMock('\Avoja\BookMentorBundle\TwitterInterface');
        $twitter->expects($this->once())
            ->method('getKeywordsFor')
            ->with('jacoporomei')
            ->will($this->returnValue($expectation));
        
//        $twitter = new \Avoja\BookMentorBundle\Stub\Twitter();
        
        $mentor = new \Avoja\BookMentorBundle\Mentor($twitter);
        
        $suggestions = $mentor->getSuggestionsFor('jacoporomei');
        
        $this->assertEquals(3, count($suggestions));
        $this->assertTrue(in_array('Pro PHP Refactoring', $suggestions));
    }
}
