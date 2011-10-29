<?php

namespace Avoja\BookMentorBundle\Tests;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testSuggestionsForJacopoRomei()
    {
        $twitter = $this->getMock('Avoja\BookMentorBundle\Tests\Stub\Twitter');
        
        $expectation = array(
            'php',
            'hockey',
            'sailing',
            'cuisine',
            'barcelona',
            'catalunya',
            'cid',
        );
        
        $twitter->expects($this->once())
            ->method('getKeywords')
            ->with('jacoporomei')
            ->will($this->returnValue($expectation));
        
        $mentor = new \Avoja\BookMentorBundle\Mentor($twitter);
        
        $suggestions = $mentor->getSuggestions('jacoporomei');
        
        $this->assertEquals(3, count($suggestions));
        $this->assertTrue(in_array('Pro PHP Refactoring', $suggestions));
    }
    
    public function testSuggestionsForIsmael()
    {
        $twitter = $this->getMock('Avoja\BookMentorBundle\Tests\Stub\Twitter');
        
        $twitter->expects($this->once())
            ->method('getKeywords')
            ->with('ismael')
            ->will($this->returnValue(array('uruguay')));

        $mentor = new \Avoja\BookMentorBundle\Mentor($twitter);
        
        $suggestions = $mentor->getSuggestions('ismael');
        
        
        $this->assertEquals(1, count($suggestions));
        $this->assertTrue(in_array('Visiting Uruguay', $suggestions));
    }
}
