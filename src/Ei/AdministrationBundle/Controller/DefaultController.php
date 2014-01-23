<?php

namespace Ei\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EiAdministrationBundle:Default:Master-Base-Admin.html.twig');
    }
}
