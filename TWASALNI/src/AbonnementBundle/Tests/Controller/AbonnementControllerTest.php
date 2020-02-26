<?php

namespace AbonnementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AbonnementControllerTest extends WebTestCase
{
    public function testCreateabonnement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CreateAbonnement');
    }

    public function testReadabonnement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ReadAbonnement');
    }

    public function testUpdateabonnement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UpdateAbonnement');
    }

    public function testDeleteabonnement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeleteAbonnement');
    }

}
