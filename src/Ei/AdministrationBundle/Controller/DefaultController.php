<?php

namespace Ei\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EiAdministrationBundle:Default:index.html.twig', array('name' => $name));
    }
}
