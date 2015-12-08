<?php

namespace Nfq\RidePlanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RouteControllerTest extends WebTestCase
{
    public function testSuggest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/route/suggest');
    }

    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/route/search');
    }
}
