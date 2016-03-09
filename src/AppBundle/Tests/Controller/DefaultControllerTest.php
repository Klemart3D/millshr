<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $crawler = $client->request('POST', '/');
        $this->assertEquals(405, $client->getResponse()->getStatusCode());

        $this->assertContains('Yo tester !', $crawler->filter('#container h1')->text());
    }
}
