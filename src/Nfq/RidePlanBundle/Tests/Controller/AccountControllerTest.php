<?php

namespace Nfq\RidePlanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccountControllerTest extends WebTestCase
{
    public function testShowprofile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/account/showprofile');
    }

}
