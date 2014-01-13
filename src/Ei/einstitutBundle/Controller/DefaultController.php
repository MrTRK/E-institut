<?php

namespace Ei\einstitutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EieinstitutBundle:Default:index.html.twig', array('name' => $name));
    }
     public function adminAction()
    {
        return $this->render('EieinstitutBundle:Default:admin.html.twig');
    }
    public function pageAction()
    {
        return $this->render('EieinstitutBundle:Pages:index.html.twig');
    }

	public function espace_personnelAction()
    {
        return $this->render('EieinstitutBundle::espace_personnel.html.twig');
    }
    public function test_pageAction()
    {
        return $this->render('EieinstitutBundle:Pages:Licence.html.twig');
    }
}
