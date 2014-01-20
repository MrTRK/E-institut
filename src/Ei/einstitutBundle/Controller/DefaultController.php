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
        //EntityManager
	$em = $this->getDoctrine()->getEntityManager();
        $oFiches = $em->getRepository('EieinstitutBundle:Fiche')->findAll();
        
        return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig',
                array('Fiches'=> $oFiches)
                );
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
    public function liste_contactAction()
       {
           return $this->render('EieinstitutBundle:Contact:liste_contact.html.twig');
       } 
	   public function demande_contactAction()
       {
           return $this->render('EieinstitutBundle:Contact:demande_contact.html.twig');
       }
    public function mon_compteAction()
    {
        return $this->render('EieinstitutBundle:Portefolio:mon_compte.html.twig');
        
    } 
    public function profilAction()
    {
        return $this->render('EieinstitutBundle:Portefolio:profil.html.twig');
    } 
    public function agendaAction()
    {
        return $this->render('EieinstitutBundle:portefolio:agenda.html.twig');
    } 
    
    public function detail_ressourceAction()
    {
        return $this->render('EieinstitutBundle:Ressources:detail_ressource.html.twig');
    } 
    public function recherche_ressourceAction()
    {
        return $this->render('EieinstitutBundle:Ressources:recherche_ressource.html.twig');
    } 
	public function messages_recusAction()
    {
        return $this->render('EieinstitutBundle:messaging:messages_recus.html.twig');
    } 
	public function messages_envoyesAction()
    {
        return $this->render('EieinstitutBundle:messaging:messages_envoyes.html.twig');
    } 
	public function brouillonAction()
    {
        return $this->render('EieinstitutBundle:messaging:brouillon.html.twig');
    } 
	public function nouveau_messageAction()
    {
        return $this->render('EieinstitutBundle:messaging:nouveau_message.html.twig');
    } 
    
    
}
