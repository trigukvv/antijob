<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminPanelController extends Controller
{
    /**
     * @Route("/adminpanel", name="adminpanel")
     */
    public function indexAction()
    {
        $builder=$this->get('triguk.security.sidebar_menu_builder');
        
        return $this->render('AppBundle:AdminPanel:index.html.twig', array(
            'listItems'=>$builder->buildMenu()
        ));
    }
}
