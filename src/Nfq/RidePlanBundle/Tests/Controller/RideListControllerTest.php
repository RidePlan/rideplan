<?php

namespace Nfq\RidePlanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RideListControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list');
    }

}
