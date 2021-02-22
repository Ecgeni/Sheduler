<?php

namespace Tests\Sheduler\Infrastructure\Controller\Client;

use Doctrine\DBAL\Connection;
use Sheduler\Domain\Client\Client;
use Sheduler\Infrastructure\Repository\Client\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\AbstractBrowser;

/**
 * @group client
 * @group functional
 */
class ClientCreateControllerTest extends WebTestCase
{
    private AbstractBrowser $client;
    private ?ClientRepository $clientRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->client = static::createClient();
        $this->clientRepository = static::$container->get(ClientRepository::class);
    }

    public function testSuccessCreateClient(): void
    {
        $name = 'test-name';
        $this->client->request("POST", "/client", ['name' => $name]);

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $result = $this->clientRepository->findByName($name);

        $this->assertInstanceOf(Client::class, $result);
    }
}
