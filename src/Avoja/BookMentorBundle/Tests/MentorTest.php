<?php

namespace Avoja\BookMentorBundle\Tests;

use Avoja\BookMentorBundle\Mentor;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testMentorReturnsRightSuggestionsForJacoporomei()
    {
        $twitter = new Stub\TwitterStub();
        
        $mentor = new Mentor($twitter);
        $suggestions = $mentor->suggestFor('jacoporomei');
        
        $this->assertEquals(3, count($suggestions));
        $this->assertTrue(in_array('Pro PHP Refactoring', $suggestions));
    }
}
