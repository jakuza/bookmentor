<?php

namespace Avoja\BookMentorBundle\Tests;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testSuggestions()
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
}