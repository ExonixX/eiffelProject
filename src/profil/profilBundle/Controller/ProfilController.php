<?php

namespace profil\profilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function indexAction()
    {
        return $this->render('profilBundle:Default:index.html.twig');
    }

    public function informationsAction()
    {
        return $this->render('profilBundle:Default:informations_etudiant.html.twig');
    }

    public function piecesjointesAction()
    {
        return $this->render('profilBundle:Default:piecesjointes_etudiant.html.twig');
    }
}
