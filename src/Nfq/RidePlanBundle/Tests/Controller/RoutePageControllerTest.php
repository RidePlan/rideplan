<?php

namespace Nfq\RidePlanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoutePageControllerTest extends WebTestCase
{
    public function testRouteshow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'query');
    }

}
