<?php

namespace Avoja\BookMentorBundle\Tests;

use Avoja\BookMentorBundle\Tests\Stub\TwitterStub;
use Avoja\BookMentorBundle\Mentor;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testMentorReturnsThreeSuggestions()
    {
        $keywords = array(
            'motorbike',
            'refactoring',
            'stivali',
            'code',
            'gino',
            'php',
            'phpcr',
        );
        
        $twitter = $this->getMockBuilder('Avoja\BookMentorBundle\TwitterInterface')->
            disableOriginalConstructor()->
            getMock();
        
        $twitter->expects($this->once())->
            method('getKeywords')->
            with('jacoporomei')->
            will($this->returnValue($keywords));

        $books = array(
            'Pro PHP Refactoring',
            'Il gatto con gli stivali',
            'Clean code',
        );
        
        $repo = $this->getMockBuilder('Avoja\BookMentorBundle\Entity\BookRepository')->
            disableOriginalConstructor()->
            getMock();
        
        $repo->expects($this->once())->
            method('getBooksByKeywords')->
            with($keywords)->
            will($this->returnValue($books));
        
        $mentor = new Mentor($twitter, $repo);
        $suggestions = $mentor->getSuggestions('jacoporomei');
        
        $this->assertEquals(3, count($suggestions));
    }
}

