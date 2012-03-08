<?php

namespace Avoja\BookMentorBundle\Tests;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testSuggestions()
    {
        $mentor = new \Avoja\BookMentorBundle\Mentor();
        
        $suggestions = $mentor->suggest('pincopallino');
        
        $this->assertEquals(4, count($suggestions));
        $this->assertTrue(in_array('I promessi sposi', $suggestions));
    }
}