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
        
        $form = $crawler->selectButton('Suggest')->form();
        $crawler = $client->submit($form, array('suggestion[username]' => 'jacoporomei'));
        
        $this->assertEquals(3, $crawler->filter('.suggestion')->count());
        $this->assertEquals(1, $crawler->filter('.suggestion:contains("Pro PHP Refactoring")')->count());
    }
}