<?php

namespace AbonnementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PromotionControllerTest extends WebTestCase
{
    public function testCreatepromotion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CreatePromotion');
    }

    public function testUpdatepromotion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UpdatePromotion');
    }

    public function testDeletepromotion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeletePromotion');
    }

    public function testReadpromotion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ReadPromotion');
    }

}
