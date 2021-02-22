<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Controller\Client;

use Sheduler\Application\Service\Client\CreateService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

final class ClientCreateController
{
    /** @Route("/client", methods={"POST"}) */
    public function create(Request $request, CreateService $service): JsonResponse
    {
        $name = $request->get('name');
        $service->do($name);

        return JsonResponse::fromJsonString('true');
    }
}