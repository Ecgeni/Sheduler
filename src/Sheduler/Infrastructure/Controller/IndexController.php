<?php
declare(strict_types=1);

namespace Sheduler\Infrastructure\Controller;

use Spiral\Database\Config\DatabaseConfig;
use Spiral\Database\DatabaseManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /** @Route("/", methods={"GET"}) */
    public function index(DatabaseManager $databaseManager, DatabaseConfig $databaseConfig): JsonResponse
    {
        return new JsonResponse($databaseManager->database('sheduledb')->getTables());
    }
}