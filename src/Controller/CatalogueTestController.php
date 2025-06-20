<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatalogueTestController extends AbstractController
{
    #[Route('/catalogue', name: 'catalogue')]
    public function index(): Response
    {
        $formations = [
            (object)[ 'id' => 1, 'titre' => 'HTML', 'sousTitre' => 'F& HTML', 'image' => 'images/HTML5.jpg' ],
            (object)[ 'id' => 2, 'titre' => 'CSS', 'sousTitre' => 'F& CSS', 'image' => 'images/CSS (1).jpg' ],
            (object)[ 'id' => 3, 'titre' => 'JavaScript', 'sousTitre' => 'F& JavaScript', 'image' => 'images/JavaScript (1).jpg' ],
            (object)[ 'id' => 4, 'titre' => 'PHP', 'sousTitre' => 'B& PHP', 'image' => 'images/PHP (1).jpg' ],
            (object)[ 'id' => 5, 'titre' => 'JAVA', 'sousTitre' => 'B& JAVA', 'image' => 'images/JAVA (1).jpg' ],
            (object)[ 'id' => 6, 'titre' => 'PYTHON', 'sousTitre' => 'B& PYTHON', 'image' => 'images/Python (1).jpg' ],
        ];

        return $this->render('catalogue/index.html.twig', [
            'formations' => $formations,
        ]);
    }
}
