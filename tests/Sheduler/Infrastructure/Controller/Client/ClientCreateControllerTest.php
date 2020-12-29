<?php

namespace Tests\Sheduler\Infrastructure\Controller\Client;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @group client
 * @group functional
 */
class ClientCreateControllerTest extends WebTestCase
{
    public function testSuccessCreateClient()
    {
        $client = static::createClient();

        $client->request("POST", "/client");

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
