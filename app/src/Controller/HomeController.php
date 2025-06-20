<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactsForm;
use App\Repository\CoursesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CoursesRepository $coursesRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $html = $coursesRepository->findOneBy(['title' => 'HTML']);
        $css = $coursesRepository->findOneBy(['title' => 'CSS']);
        $javascript = $coursesRepository->findOneBy(['title' => 'JAVASCRIPT']);
        $python = $coursesRepository->findOneBy(['title' => 'PYTHON']);
        $php = $coursesRepository->findOneBy(['title' => 'PHP']);
        $java = $coursesRepository->findOneBy(['title' => 'JAVA']);

        $contact = new Contacts();
        $form = $this->createForm(ContactsForm::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }
        return $this->render('home/index.html.twig', compact('html', 'css', 'javascript', 'python', 'php', 'java', 'form'));
    }
}
