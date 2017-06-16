<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HobbyTreeController extends Controller
{
    /**
     * @Route("/hobbytreetest", name="hobbytreetest")
     */
    public function indexAction()
    {
        $formatter=$this->get('app.formatter.hobby_tree_formatter');
        
        $items=$formatter->getHobbyTree();
        return $this->render('AppBundle:HobbyTree:index.html.twig',
            [
                'items'=>$items
            ]
        );
    }
}
