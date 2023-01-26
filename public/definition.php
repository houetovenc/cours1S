<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Definition extends AbstractController
{
    // Structure d'une route
    // Une route peut être une constante
    // Pour définir une route :

    /**
     * @Route('/blog(slug)', name='article_blog')
     */

    // la constante slug est une valeur dynamique, on peut mettre ce qu'on veut

    public function article($slug): void
    {
        return;
    }

    // on passe par la route pour recuperer le id en param d'url, on recupere de façon dynamique l'id
    // requirements siginie que le variables passés dans la fonction sont soumi à validation
    /**
     * @Route('/{id}', name='index', requirements=['id'=>'\d+'], defaults=['id'=>1])
     * @param [type] $id
     */
    public function index($id): void
    {
        return;
    }

    // Routes et parametres
    /**
     * @Route('/toto/{page}', name='blog_index')
     * @param [type] $page
     * @return void
     */

    public function indexAction($page): void
    {
        echo $page;
    }

    /**
     * @Route('/page/{page}/{subpage}', name='blog_index')
     * @param [type] $page
     * @param [type] $subpage
     */
    // Fonction avec plusieurs params
    public function indexAction2($page, $subpage): void
    {
        echo $page;
        echo $subpage;
    }

    //generation d'url
    /**
     * @Route('/blog', name'article_blog')
     */

    public function article2($slug): void
    {
        $this->generateUrl('nom_de_la-route', array('type'=>'param'),true);
    }
}