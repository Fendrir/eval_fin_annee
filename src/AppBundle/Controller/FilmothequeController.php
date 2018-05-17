<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Film;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FilmothequeController extends Controller
{
    /**
     * @Route("/afficherFilm")
     */
    public function afficherFilmAction()
    {
        return $this->render('AppBundle:Filmotheque:afficher_film.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/rechercheFilm")
     */
    public function rechercheFilmAction()
    {
        return $this->render('AppBundle:Filmotheque:recherche_film.html.twig', array(
            // ...
        ));
    }

}
