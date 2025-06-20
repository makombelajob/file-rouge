<?php

namespace App\Controller;

use App\Repository\CoursesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]  
    public function index(CoursesRepository $coursesRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $courses = $coursesRepository->findAll();
        return $this->render('profile/index.html.twig', compact('courses'));
    }

    #[Route('/achat-du-cours', name: 'app_profile_payement')]
    public function payement():Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('profile/payment.html.twig');
    }
}
