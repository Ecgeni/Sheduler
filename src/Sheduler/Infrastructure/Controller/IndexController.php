<?php
declare(strict_types=1);

namespace Sheduler\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class IndexController extends AbstractController
{
    /** @Route("/", methods={"GET"}) */
    public function index(): JsonResponse
    {
        return new JsonResponse();
    }
}