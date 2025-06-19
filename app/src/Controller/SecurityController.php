<?php

namespace App\Controller;

use App\Entity\Users;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('Security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/reset-password', name: 'app_reset_password')]
    public function resetPassword(Request $request, EntityManagerInterface $entityManager, EmailService $emailService, TokenGeneratorInterface $tokenGenerator): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');

            // Vérifier si l'email existe dans la base de données
            $user = $entityManager->getRepository(Users::class)->findOneBy(['email' => $email]);

            if ($user) {
                // Générer un token unique
                $token = $tokenGenerator->generateToken();
                $user->setResetToken($token); // Assurez-vous que votre entité Users a un champ resetToken
                $user->setTokenCreatedAt(new \DateTime()); // Optionnel : ajouter une date d'expiration
                $entityManager->flush();

                // Envoyer l'email de réinitialisation
                try {
                    $resetUrl = $this->generateUrl('app_reset_password_confirm', ['token' => $token], true);
                    $emailService->send(
                        $user->getEmail(),
                        'Réinitialisation de votre mot de passe',
                        'emails/reset_password.html.twig',
                        [
                            'user' => $user,
                            'username' => $user->getUsername(),
                            'resetUrl' => $resetUrl
                        ]
                    );
                    $this->addFlash('success', 'Un email de réinitialisation vous a été envoyé.');
                } catch (\Exception $e) {
                    $this->addFlash('warning', 'Une erreur est survenue lors de l\'envoi de l\'email.');
                }
            } else {
                $this->addFlash('warning', 'Aucun compte trouvé avec cet email.');
            }

            return $this->redirectToRoute('app_reset_password');
        }

        return $this->render('Security/reset_password.html.twig');
    }

    #[Route(path: '/reset-password/{token}', name: 'app_reset_password_confirm')]
    public function resetPasswordConfirm(string $token, EntityManagerInterface $entityManager): Response
    {
        // Logique pour valider le token et permettre la réinitialisation
        $user = $entityManager->getRepository(Users::class)->findOneBy(['resetToken' => $token]);

        if (!$user) {
            $this->addFlash('error', 'Token invalide ou expiré.');
            return $this->redirectToRoute('app_reset_password');
        }

        // Ajouter un formulaire pour entrer le nouveau mot de passe (à implémenter)
        return $this->render('Security/reset_password_confirm.html.twig', [
            'token' => $token,
        ]);
    }
}