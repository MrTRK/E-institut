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
    
    public function forumAction()
    {
        return $this->render('EieinstitutBundle:Community:Forum.html.twig');
    }
    
}
