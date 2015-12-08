<?php

namespace Nfq\RidePlanBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccountRegistrationControllerTest extends WebTestCase
{
    public function testRegisteraccount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/register');
    }

}
