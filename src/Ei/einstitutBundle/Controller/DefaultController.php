<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EieinstitutBundle:Pages:index.html.twig');
    }
    public function ressourcesAction( $page)
    {
		 $total             = $this->getDoctrine()->getRepository('EieinstitutBundle:fiche')->createQueryBuilder('p')->getQuery()->getResult();
        /* total of resultat */
        $total_articles    = count($total);
        $articles_per_page = $this->container->getParameter('max_articles_on_listepage');
        $last_page         = ceil($total_articles / $articles_per_page);
        $previous_page     = $page > 1 ? $page - 1 : 1;
        $next_page         = $page < $last_page ? $page + 1 : $last_page;         /* resultat  a afficher*/         $entities          = $this->getDoctrine()->getRepository('EieinstitutBundle:fiche')->createQueryBuilder('p')->setFirstResult(($page * $articles_per_page) - $articles_per_page)->setMaxResults($this->container->getParameter('max_articles_on_listepage'))->getQuery()->getResult();
        return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig', array(
            'Fiches' => $entities,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_articles' => $total_articles,
        ));
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
    
    public function detail_ressourceAction($fiche)
    {	
        $em = $this->getDoctrine()->getEntityManager();
        $oFiches = $em->getRepository('EieinstitutBundle:Fiche')->findOneBy(array('id'=>$fiche));
        
        $oPreconisations='';
       // $oCrit_Preconisations='';
        
        /*$query = $em->createQuery(
                'SELECT c.id FROM EieinstitutBundle:fiche f 
                    JOIN EieinstitutBundle:Preconisation p 
                    JOIN EieinstitutBundle:CriterePreconisation c   
                   ');
       
       $query =  $em->createQueryBuilder()
                    ->select('c')
                    ->from('EieinstitutBundle:CriterePreconisation', 'c')
                    ->getQuery(); 
        //use Doctrine\ORM\Query\Expr\Join;
         
        
        $oCrit_Preconisations = $query->getResult();
        */
        
        $oCrit_Preconisations = $em->getRepository('EieinstitutBundle:CriterePreconisation')->PreconisationFiche($fiche);
        $oCrit = $em->getRepository('EieinstitutBundle:Criteres')->findAll();
        $oFichePre = $em->getRepository('EieinstitutBundle:Preconisation')->findBy(array('fiche_preconisation'=>$fiche));
        $sumNote = 0;
        $NotePreconisation=null;
        
        
        
         foreach($oCrit as $c)
            {
                $id2 = $c->getId();
                $sumNote = 0;
                foreach($oCrit_Preconisations as $cp)
               {
                    $id1 = $cp->getCriteres()->getId();
                     if( $id1 == $id2)
                        {
                            $oNote =  $cp->getNotes();
                            $Note = $oNote->getAnnotation();
                            $sumNote += $Note;
                        }
               }
               //$NotePreconisation['Critere'] = $c->getLibelle();
               if( $oFichePre)$sumNote = $sumNote / count($oFichePre);
               
             $NotePreconisation[$id2]= array('note'=>$sumNote,'NomCritere'=>$c->getLibelle());
            }
        
        
            //$oNote = new Notes();
           
          
          
              
              
            
            
       
        
       // echo $hello;
       /* echo count($oFiches);
       if ($oFiches) {
           $oPreconisations = $em->getRepository('EieinstitutBundle:Preconisation')->findBy(array('fiche_preconisation'=>$oFiches));
           $oCrit_Preconisations = $em->getRepository('EieinstitutBundle:CriterePreconisation')->findBy(array('preconisation'=>$oPreconisations)); 
           
       }
       else
       {
           
       }*/
        
        
       return $this->render('EieinstitutBundle:Ressources:detail_ressource_connecte.html.twig',array('NotePreconisation'=>$NotePreconisation,'sumNote'=>$sumNote,'Fiches'=>$oFiches,'Preconisations'=>$oPreconisations,'Crit_Preconisations'=>$oCrit_Preconisations,'Criteres'=>$oCrit));
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
