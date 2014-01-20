<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class UsagerController extends Controller
{
    public function liste_contactAction()
    {
        
        $em = $this->getDoctrine()->getEntityManager();
        
        
        $User = $this->get('security.context')->getToken()->getUser();
        
        $Contacts = $em->getRepository('EieinstitutBundle:Contact')->findBy(array('contact_user1' => $User ));
        
        
        return $this->render('EieinstitutBundle:Contact:liste_contact.html.twig', array("Contacts"=> $Contacts));
    }
    public function supprimer_contactAction($contact)
    {
         $em = $this->getDoctrine()->getEntityManager();
         $request = $this->getRequest();
         
         $User = $em->getRepository('EieinstitutBundle:User')->findOneBy(array('username'=> $contact));
         
         $action = $request->request->get('submit_delete');
         $Contact = null;
          if(isset($action))
         {
            $UserConnect = $this->get('security.context')->getToken()->getUser();
            $Contact = $em->getRepository('EieinstitutBundle:Contact')
                          ->findOneBy(
                                  array(  'contact_user2'=> $User,
                                          'contact_user1'=> $UserConnect ));
            //suppression
            $em->persist($Contact);
            $em->remove($Contact);
            $em->flush();
         }
         //$iduser =   $request->request->get('idContact');  
        
       return $this->render('EieinstitutBundle:Contact:supprimer_contact.html.twig', array('UserContact' => $User));
    }

}
