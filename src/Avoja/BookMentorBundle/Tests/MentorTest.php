<?php

namespace Avoja\BookMentorBundle\Test;

use Avoja\BookMentorBundle\Mentor;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testMentorReturnsRightSuggestionsForJacoporomei()
    {
        $mentor = new Mentor();
        $suggestions = $mentor->suggestFor('jacoporomei');
        
        $this->assertEquals(3, count($suggestions));
        $this->assertTrue(in_array('Pro PHP Refactoring', $suggestions));
    }
}
