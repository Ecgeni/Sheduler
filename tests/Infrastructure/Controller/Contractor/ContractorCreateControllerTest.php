<?php

declare(strict_types=1);

namespace Tests\Infrastructure\Controller\Contractor;

/**
 * @group functional
 * @group contractor
 */
class ContractorCreateControllerTest
{
    public function testSuccessCreateContractor()
    {
        $client = static::createClient();

        $client->request("POST", "/contractor");

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}