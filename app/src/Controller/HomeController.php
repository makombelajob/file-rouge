<?php

namespace App\Controller;

use App\Repository\CoursesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CoursesRepository $coursesRepository): Response
    {
        $html = $coursesRepository->findOneBy(['title' => 'HTML']);
        $css = $coursesRepository->findOneBy(['title' => 'CSS']);
        $javascript = $coursesRepository->findOneBy(['title' => 'JAVASCRIPT']);
        $python = $coursesRepository->findOneBy(['title' => 'PYTHON']);
        $php = $coursesRepository->findOneBy(['title' => 'PHP']);
        $java = $coursesRepository->findOneBy(['title' => 'JAVA']);
        return $this->render('home/index.html.twig', compact('html', 'css', 'javascript', 'python', 'php', 'java'));
    }
}
