<?php 

namespace Avoja\BookMentorBundle\Test\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BasicTest extends WebTestCase
{
    public function testSuggestion()
    {
        $client = $this->createClient();
        
        $crawler = $client->request('GET', '/bookmentor/suggest');
        
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(1, $crawler->filter('h1:contains("BookMentor")')->count());
        $this->assertEquals(0, $crawler->filter('.suggestion')->count());
    }
}