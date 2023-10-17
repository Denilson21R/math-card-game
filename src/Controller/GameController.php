<?php

namespace App\Controller;

use App\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route('/play', name: 'app_game')]
    public function index(): Response
    {
        return $this->render('game/index.html.twig', [
            'controller_name' => 'GameController',
            'page' => 'game',
            'player' => new Player("Denilson", "0"),
            'enemy1' => new Player("Enemy 1", "0"),
            'enemy2' => new Player("Enemy 2", "0"),
            'enemy3' => new Player("Enemy 3", "0"),
        ]);
    }
}