<?php

namespace App\Controller {

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class AccueilController extends AbstractController
    {


        /**
         * @Route("/accueil", name="accueil")
         */
        public function accueil()
        {
            $message = 'Bonjour';

            // récupère le fichier twig
            // le compile en html
            // crée une instance de la classe Response
            // et la retourne au navigateur
            return $this->render('accueil.html.twig', ['message' => $message]);
        }
    }
}