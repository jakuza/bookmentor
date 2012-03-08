<?php

namespace Avoja\BookMentorBundle\Tests;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testSuggestionsForPincopallino()
    {
        $twitter = $this->getMock('\Avoja\BookMentorBundle\Twitter\TwitterInterface');
        
        $twitter->expects($this->any())
            ->method('getKeywordsFor')
            ->with('pincopallino')
            ->will($this->returnValue(array('galattica', 'sposi', 'refactoring')));
               
        $mentor = new \Avoja\BookMentorBundle\Mentor($twitter);
        
        $suggestions = $mentor->suggest('pincopallino');
        
        $this->assertEquals(4, count($suggestions));
        $this->assertTrue(in_array('I promessi sposi', $suggestions));
    }

    public function testSuggestionsForEngineergio()
    {
        $twitter = $this->getMock('\Avoja\BookMentorBundle\Twitter\TwitterInterface');
        
        $twitter->expects($this->any())
            ->method('getKeywordsFor')
            ->with('engineergio')
            ->will($this->returnValue(array('malavoglia')));
               
        $mentor = new \Avoja\BookMentorBundle\Mentor($twitter);
        
        $suggestions = $mentor->suggest('engineergio');
        
        $this->assertEquals(1, count($suggestions));
        $this->assertTrue(in_array('I Malavoglia', $suggestions));
    }
}