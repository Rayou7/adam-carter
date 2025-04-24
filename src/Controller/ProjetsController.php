<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjetsController extends AbstractController
{
    #[Route('/projets', name: 'app_projets')]
    public function index(): Response
    {
        // Données des projets (à adapter avec vos vrais projets)
        $projects = [
            [
                'icon' => 'code',
                'title' => "Portfolio Symfony",
                'date' => "Janvier 2024",
                'description' => "Création de mon portfolio avec Symfony 6 et Tailwind CSS, intégration responsive.",
                'technologies' => ["Symfony", "Twig", "Tailwind"]
            ],
            [
                'icon' => 'server',
                'title' => "Application de Gestion",
                'date' => "Mars 2024",
                'description' => "Développement d'une application interne avec gestion des utilisateurs et des droits.",
                'technologies' => ["PHP", "MySQL", "Bootstrap"]
            ],
            // Ajoutez d'autres projets ici...
        ];

        return $this->render('projets/index.html.twig', [
            'projects' => $projects,
            'active_tab' => 'professional' // ou 'personal'/'school' selon besoin
        ]);
    }
}