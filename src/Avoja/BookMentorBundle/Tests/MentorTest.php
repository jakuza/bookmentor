<?php

namespace Avoja\BookMentorBundle\Tests;

use Avoja\BookMentorBundle\Mentor;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $expectation = array(
            'php',
            'cenerentola',
            'fuoco',
            'refactoring',
            'cyberpunk',
            'code',
        );
        
        $this->twitter = $this->getMock('\Avoja\BookMentorBundle\Twitter\TwitterStub');
        $this->mentor = new Mentor($this->twitter);
    }
    
    /**
     * @expectedException Exception
     */
    public function testSuggestionsForEmptyUsername()
    {
        $this->mentor->getSuggestions('');
    }
    
    public function testSuggestionsForJacoporomei()
    {
        $expectation = array(
            'php',
            'cenerentola',
            'fuoco',
            'refactoring',
            'cyberpunk',
            'code',
        );

        $this->twitter->expects($this->once())
            ->method('getKeyWordsFor')
            ->with('jacoporomei')
            ->will($this->returnValue($expectation));

        $suggestions = $this->mentor->getSuggestions('jacoporomei');
        
        $this->assertEquals(5, count($suggestions));
        $this->assertTrue(in_array('Pro PHP Refactoring', $suggestions));
    }

    public function testSuggestionsForPincopallino()
    {
        $expectation = array(
            'Siddartha',
            'code',
            'C++',
        );
        $this->twitter->expects($this->once())
            ->method('getKeyWordsFor')
            ->with('pincopallino')
            ->will($this->returnValue($expectation));
        
        $suggestions = $this->mentor->getSuggestions('pincopallino');
        
        $this->assertEquals(3, count($suggestions));
        $this->assertTrue(in_array('Siddartha', $suggestions));
    }

}
