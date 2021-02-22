<?php

declare(strict_types=1);

namespace Sheduler\Infrastructure\Controller\Contractor;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ContractorCreateController extends AbstractController
{
    /** @Route("/contractor", methods={"POST"}) */
    public function create(): JsonResponse
    {
        return JsonResponse::fromJsonString("contractor");
    }
}