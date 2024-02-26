<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Form\ProjetType;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET', 'POST'])]
    public function index(Request $request, ProjetRepository $projetRepository, EntityManagerInterface $em): Response
    {
        $projet = new Projet;
        $formProjet = $this->createForm(ProjetType::class, $projet);
        $formProjet->handleRequest($request);
        if( $formProjet->isSubmitted() && $formProjet->isValid() ){    
            $em->persist($projet);
            $em->flush();
            $this->addFlash('success', 'Message envoyé ! Nous répondrons rapidement ! Merci');

            return $this->redirectToRoute("app_shop");
        }
        $arrow = $request->query->get('arrow');
        $word = $request->query->get('animation');
        $topSize = [-10,-50,-20,-15,-40,-30,-5,-10,-50,-20,-40,-15,-30,-5,-10,-50,-20,-40,-15,-30 ,-5,-10,-50,-20,-40,-15,-30,-5,-10,-50,-20,-40,-15,-30,-5,-10,-50,-20,-40,-15,-30,-5];
        $leftSize = [0,14.3,57.2,28.6,71.5,42.9,85.8,5,19.3,62.2,32.6,75.5,47.9,89.8,10,24.3,67.2,37.6,80.5,52.9,94.8,0,14.3,57.2,28.6,71.5,42.9,85.8,5,19.3,62.2,32.6,75.5,47.9,89.8,10,24.3,67.2,37.6,80.5,52.9,94.8];
        return $this->render('home/index.html.twig', [
            'formProjet' => $formProjet->createView(),
            'topSize' => $topSize,
            'leftSize' => $leftSize,
            'word' => $word,
            'arrow' => $arrow
        ]);
    }

    #[Route('/mentions', name: 'app_mentions', methods: ['GET'])]
    public function mentions(Request $request): Response
    {
        return $this->render('home/mentions.html.twig');
    }
}
