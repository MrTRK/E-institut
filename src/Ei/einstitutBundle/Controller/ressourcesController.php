<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class ressourcesController extends Controller
{
   
    public function ressourcesAction( $page)
    {	
                $session = new Session();
                $session->set('CurrentMenu', 'Ressources');
                
		$em = $this->getDoctrine()->getManager();
		$request = $this->getRequest();
		
		
		//$session->start();
		$action = $request->request->get('btn_search');
		$type =  $request->request->get('type');
		$type1 = $request->request->get('type1');
		$type2 = $request->request->get('type2');
		$type3 = $request->request->get('type3');
		$type4 = $request->request->get('type4');
		$type5 = $request->request->get('type5');
		$type6 = $request->request->get('type6');
		$type7 = $request->request->get('type7');
		$ordre = $request->request->get('trier');
		$test=0;
		if(isset($action))
		{
			$session->set('type', $type);
			$session->set('type1', $type1);
			$session->set('type2', $type2);
			$session->set('type3', $type3);
			$session->set('type4', $type4);
			$session->set('type5', $type5);
			$session->set('type6', $type6);
			$session->set('type7', $type7);
			$session->set('ordre', $ordre);
		}
		
		
		//$search_ressource="";
		$search_ressource = $request->request->get('mot_cle');
        $articles_per_page = $this->container->getParameter('max_articles_on_listepage');
		
		/*r�cup�ration des types
		*
		*
		*	********************/
		$type =   $session->get('type');
		$type1 =  $session->get('type1');
		$type2 =  $session->get('type2');
		$type3 =  $session->get('type3');
		$type4 =  $session->get('type4');
		$type5 =  $session->get('type5');
		$type6 =  $session->get('type6');
		$type7 =  $session->get('type7');
		$ordre =  $session->get('trier');
	
		if(!empty($type)||!empty($type1)||!empty($type2)||!empty($type3)||!empty($type4)||!empty($type5)||!empty($type6)||!empty($type7))
		{
		$test=1;
		}
		
		/*r�cup�ration des domaines
		*
		*
		*	********************/
		
		$domaine = $request->request->get('domaine');
		$domaine1 = $request->request->get('domaine1');
		$domaine2 = $request->request->get('domaine2');
		$domaine3 = $request->request->get('domaine3');
		$domaine4 = $request->request->get('domaine4');
		$domaine5 = $request->request->get('domaine5');
		$domaine6 = $request->request->get('domaine6');
		$domaine7 = $request->request->get('domaine7');
		$domaine8 = $request->request->get('domaine8');
		$domaine9 = $request->request->get('domaine9');
		$cases	=0;
		$cases1	=0;
		$cases2	=0;
		$cases3	=0;
		$cases4	=0;
		$cases5	=0;
		$cases6	=0;
		$cases7	=0;
		$cases8	=0;
		$cases9	=0;
		$test1=0;
		if(!empty($domaine)||!empty($domaine1)||!empty($domaine2)||!empty($domaine3)||!empty($domaine4)||!empty($domaine5)||!empty($domaine6)||!empty($domaine7)||!empty($domaine8)||!empty($domaine9))
		{
		$test1=1;
		}
		
		
		//par defaut
		
			$total = $em->createQuery("SELECT f FROM EieinstitutBundle:fiche f where f.statut=1 ORDER BY f.".$ordre);
			$case	=0;		

		//recherche par mot cle
                
       
		if(isset($action)&&!empty($search_ressource))
		{
			$total = $em->createQuery("SELECT f FROM EieinstitutBundle:fiche f WHERE (f.titre like :titre or f.resume like :titre or f.theme like :titre or f.domaine like :titre or f.type like :titre) and f.statut=1 ORDER BY f.".$ordre)
			->setParameter('titre', '%'.$search_ressource.'%');	
		}
		
		//par domaine
		if($test==1)
		{
			$total = $em->createQuery("SELECT f FROM EieinstitutBundle:fiche f WHERE (f.type= :type or f.type= :type1 or f.type= :type2 
			or f.type= :type3 or f.type= :type4 or f.type= :type5 or f.type= :type6 or f.type= :type7)  and f.statut=1 ORDER BY f.".$ordre) 
			->setParameters(array(
			//'order'=> $ordre,
			'type'=> $type,
			'type1'=> $type1,
			'type2'=> $type2,
			'type3'=> $type3,
			'type4'=> $type4,
			'type5'=> $type5,
			'type6'=> $type6,
			'type7'=> $type7,
			//'resume'=> 'Informatique',
			//'domaine'=> $domaine,
			//'domaine1'=> $domaine1,
							));
							
		}
		
		//recherche par type et domaine
		
		if($test==1 && $test1==1)
		{
			$total = $em->createQuery("SELECT f FROM EieinstitutBundle:fiche f WHERE (f.type= :type or f.type= :type1 or f.type= :type2 
			or f.type= :type3 or f.type= :type4 or f.type= :type5 or f.type= :type6 or f.type= :type7) and 
			(f.domaine= :domaine or f.domaine= :domaine1 or f.domaine= :domaine2 or f.domaine= :domaine3 or f.domaine= :domaine4 or f.domaine= :domaine6 or f.domaine= :domaine7 or f.domaine= :domaine8 or f.domaine= :domaine9) ORDER BY f.".$ordre)
			->setParameters(array(
			'type'=> $type,
			'type1'=> $type1,
			'type2'=> $type2,
			'type3'=> $type3,
			'type4'=> $type4,
			'type5'=> $type5,
			'type6'=> $type6,
			'type7'=> $type7,
			'domaine'=> $domaine,
			'domaine1'=> $domaine1,
			'domaine2'=> $domaine2,
			'domaine3'=> $domaine3,
			'domaine4'=> $domaine4,
			'domaine5'=> $domaine5,
			'domaine6'=> $domaine6,
			'domaine7'=> $domaine7,
			'domaine8'=> $domaine8,
			'domaine9'=> $domaine9,
							));
							
			
		}
		//recherche par domaine
		if($test1==1)
		{
			$total = $em->createQuery("SELECT f FROM EieinstitutBundle:fiche f WHERE f.domaine= :domaine or f.domaine= :domaine1 or f.domaine= :domaine2 or f.domaine= :domaine3 or f.domaine= :domaine4 or f.domaine= :domaine5 or f.domaine= :domaine6 or f.domaine= :domaine7 or f.domaine= :domaine8 or f.domaine= :domaine9 ORDER BY f.".$ordre)
			->setParameters(array(
			'domaine'=> $domaine,
			'domaine1'=> $domaine1,
			'domaine2'=> $domaine2,
			'domaine3'=> $domaine3,
			'domaine4'=> $domaine4,
			'domaine5'=> $domaine5,
			'domaine6'=> $domaine6,
			'domaine7'=> $domaine7,
			'domaine8'=> $domaine8,
			'domaine9'=> $domaine9,
							));
						
						
		}
			
		
		$total_articles    = count($total->getResult());
        $total->setFirstResult(($page * $articles_per_page) - $articles_per_page);
		$total->setMaxResults(4);
		$results = $total->getResult();
		$last_page         = ceil($total_articles / $articles_per_page);
        $previous_page     = $page > 1 ? $page - 1 : 1;
        $next_page         = $page < $last_page ? $page + 1 : $last_page; 
	
        
        
        return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig', array(
            'Fiches' 		=> $results,
            'last_page' 	=> $last_page,
            'previous_page' => $previous_page,
            'current_page' 	=> $page,
            'next_page' 	=> $next_page,
            'total_articles' => $total_articles,
			'cases'			=>$cases,
			'cases1'		=>$cases1,
			'cases2'		=>$cases2,
			'cases3'		=>$cases3,
			'cases4'		=>$cases4,
			'cases5'		=>$cases5,
			'cases6'		=>$cases6,
			'cases7'		=>$cases7,
			'cases8'		=>$cases8,
			'cases9'		=>$cases9,
			'test1'			=>$test1,
			'ordre'			=>$ordre,
			'mot_cle'		=>$search_ressource,
			'type'			=>$type,
			'type1'			=>$type1,
			'type2'			=>$type2,
			'type3'			=>$type3,
			'type4'			=>$type4,
			'type5'			=>$type5,
			'type6'			=>$type6,
			'type7'			=>$type7
		
        ));
        
        
        
      //  return $this->render('EieinstitutBundle:Ressources:listes_ressources.html.twig');
    }
	}