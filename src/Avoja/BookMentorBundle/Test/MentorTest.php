<?php

namespace Avoja\BookMentorBundle\Test;

use Avoja\BookMentorBundle\Mentor;

class MentorTest extends \PHPUnit_Framework_TestCase
{
    public function testMentor()
    {
        $mentor = new Mentor();
        
        $this->assertTrue(is_array($mentor->suggestFor('jacoporomei')));
    }
}
