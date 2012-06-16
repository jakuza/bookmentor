<?php

namespace Avoja\BookMentorBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasicTest extends WebTestCase
{
    public function testSuggestions()
    {
        $client = $this->createClient();
        
        $crawler = $client->request('GET', '/suggestions/jacoporomei');
        
        $this->assertTrue($client->getResponse()->isSuccessful(), 
            'Successful HTTP request.');
        $this->assertEquals(3, $crawler->filter('.suggestion')->count(), 
            'Right amount of suggestions.');
        $this->assertEquals(
            1, 
            $crawler->filter('.suggestion:contains("Pro PHP Refactoring")')->count(),
            'Expected suggestion among suggestions.'
        );
    }
}