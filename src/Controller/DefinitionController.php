<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefinitionController extends AbstractController 
{

    /**
     *@Route("/def", name="app_page")
     */
    public function index()
    {
        $variable = new Response('Ma Reponse');
        
        return $this->render('default/index.html.twig',[
            'variable' => $variable
        ]);
    }
}