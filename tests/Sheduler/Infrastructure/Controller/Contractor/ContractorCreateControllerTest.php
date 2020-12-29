<?php

declare(strict_types=1);

namespace Tests\Sheduler\Infrastructure\Controller\Contractor;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @group functional
 * @group contractor
 */
class ContractorCreateControllerTest extends WebTestCase
{
    public function testSuccessCreateContractor()
    {
        $client = static::createClient();

        $client->request("POST", "/contractor");

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}