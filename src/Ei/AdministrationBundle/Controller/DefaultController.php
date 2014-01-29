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
        $em = $this->getDoctrine()->getManager();
        $pg= $em->getRepository('EieinstitutBundle:Pages')->findAll();
        return $this->render('EiAdministrationBundle:admin:a_liste_page.html.twig',
                            array(
                                'pages' => $pg
                            )    
                );
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
    
    public function supprimer_ressourceAction()
    { 
       $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idFiche = $request->request->get('idFiche');
        if($idFiche)
            {
                $rs = $em->getRepository('EieinstitutBundle:Fiche')->findOneBy(array('id'=> $idFiche));
                $em->remove($rs);
                $em->flush();
            }
         return $this->redirect($this->generateUrl('ei_administration_ressources'));
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
    
    public function ajouter_actualiteAction()         
    {
        
            $em = $this->getDoctrine()->getManager();
            $request = $this->getRequest();
            //$id = $request->request->get('id');
            $titre=$request->request->get('txt_titre');
            //$description=$request->request->get('txt_description');
            $contenu=$request->request->get('contenu');
            //$datedebut=$request->request->get('date_debut');
            //$datefin=$request->request->get('date_fin');
            $url_image=$request->request->get('txt_url');
            
            //$UserChild = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('id'=> $id));
            $UserParent = $this->get('security.context')->getToken()->getUser();
            
            $actualite = new Actualites;
            $actualite->setUser($UserParent);
            $actualite->setTitre($titre);
            $actualite->setStatut(0);
            $actualite->setContenu($contenu);
            $actualite->setDateActualite(new \dateTime());
            $actualite->setDateExpiration(new \dateTime());
            $actualite->setUrlImage($url_image);
            $em->persist($actualite);
            $em->flush();
            
        return $this->render('EiAdministrationBundle:Contributor:c_ajouter_actualite.html.twig');
    }
    
    public function liste_actualiteAction()         
    {
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('EieinstitutBundle:Actualites')->findAll();
       
        return $this->render('EiAdministrationBundle:Contributor:c_liste_actualite.html.twig', array("actualite"=>$actualite));
    }
    
    public function supprimer_actualiteAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $idActualite = $request->request->get('idActualite');
        if($idActualite)
            {
                $Actualite = $em->getRepository('EieinstitutBundle:Actualites')->findOneBy(array('id'=> $idActualite));
                $em->remove($Actualite);
                $em->flush();
               $msge="Actualité Supprimer";
            }
         return $this->redirect($this->generateUrl('liste_actualite', array("msge"=>$msge)));
    }
    
    
     public function modifier_actualiteAction($actualite)         
    {
         
         $em = $this->getDoctrine()->getManager();
       $request = $this->getRequest();
        $actualit = $request->request->get('actualite');
        
        /*if($actualite)
            {*/
                $actualites =  $em
                            ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a WHERE  (a.id = :actualite)')
                            ->setParameter('actualite',  $actualite)
                            
                            ->getResult();
                return $this->render('EiAdministrationBundle:Contributor:c_modifier_actualite.html.twig', array("actualites"=> $actualites));
           /* }
         else{
             return $this->redirect($this->generateUrl('liste_actualite'));
         }*/
       
    }
    
    
    public function detail_actualiteAction($actualite)         
    {
        $em = $this->getDoctrine()->getManager();
       $request = $this->getRequest();
        $actualit = $request->request->get('actualite');
        $actualites =  $em
                            ->createQuery('SELECT a FROM EieinstitutBundle:Actualites a WHERE  (a.id = :actualite)')
                            ->setParameter('actualite',  $actualite)
                            
                            ->getResult();
        
        return $this->render('EiAdministrationBundle:Contributor:detail_actualite.html.twig', array("actualites"=> $actualites));
    }


    
    
}
