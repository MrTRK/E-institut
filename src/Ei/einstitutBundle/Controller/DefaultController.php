<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EieinstitutBundle:Pages:index.html.twig');
    }
    public function ressourcesAction()
    {
        return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig');
    }
    public function ajouter_ressourceAction()
    {
        return $this->render('EieinstitutBundle:Ressources:ajouter_ressource.html.twig');
    }
    
    public function forumAction()
    {
        return $this->render('EieinstitutBundle:Community:Forum.html.twig');
    }
    public function espace_PersonnelAction()
    {
        return $this->render('EieinstitutBundle:Portefolio:espace_personnel.html.twig');
    }
    public function annuaireAction()
    {
        return $this->render('EieinstitutBundle:Pages:annuaire.html.twig');
    }
    
    
    
}
