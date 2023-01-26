<?php

namespace App\Controller;

// La class Response est une classe Symfony, permet de retourner une reponse après la requette HTTP du client
// cette class va nous permettre de faire certaine manip, comme l'utilisation de render
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    // ici on associe le chemin au nom
    /**
     *@Route("/lucky/number", name="app_lucky_number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        // retourne la vue en lui passant des variables en parametres
        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
    }
}