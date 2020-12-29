<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Controller\Client;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClientCreateController
{
    /** @Route("/client", methods={"POST"}) */
    public function create(): JsonResponse
    {
        return JsonResponse::fromJsonString('');
    }
}