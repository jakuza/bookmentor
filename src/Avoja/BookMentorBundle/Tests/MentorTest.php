<?php

namespace Avoja\BookMentorBundle\Tests;

use Avoja\BookMentorBundle\Mentor;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testMentorReturnsRightSuggestionsForJacoporomei()
    {
        $twitter = $this->getMock('Avoja\BookMentorBundle\Tests\Stub\TwitterStub');
        $twitter->expects($this->once())
            ->method('getKeywords')
            ->will($this->returnValue(array('refactoring', 'mountain', 'sail', 'cinderella', 'pingo')));
        
        $mentor = new Mentor($twitter);
        $suggestions = $mentor->suggestFor('jacoporomei');
        
        $this->assertEquals(3, count($suggestions));
        $this->assertTrue(in_array('Pro PHP Refactoring', $suggestions));
    }
}
