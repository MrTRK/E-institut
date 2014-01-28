<?php

namespace Ei\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EiAdministrationBundle:admin:tbd_admin.html.twig');
    }
    public function actualiteAction()
    {
        return $this->render('EiAdministrationBundle:admin:a_liste_actualite.html.twig');
    }
    public function pageAction()
    {
        return $this->render('EiAdministrationBundle:admin:a_liste_page.html.twig');
    }
    
        
     public function ressourcesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rs= $em->getRepository('EieinstitutBundle:Fiche')->findAll();
        return $this->render('EiAdministrationBundle:admin:a_liste_ressource.html.twig',
                            array(
                                'ressource' => $rs
                            )    
                );
        
    }
    
    public function listeuserAction()
    {
        return $this->render('EiAdministrationBundle:admin:a_liste_user.html.twig');
    }
    public function listetutoAction()
    {
        return $this->render('EiAdministrationBundle:admin:a_liste_tuto.html.twig');
    }
     public function newsletterAction()
    {
        return $this->render('EiAdministrationBundle:admin:a_liste_newsletter.html.twig');
    }
}
