<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Helper\HobbyScaleExtractor;
use AppBundle\Form\HobbySearchType;
use AppBundle\Entity\Hobby;

class HobbySearchController extends Controller
{
    
    protected function getSearchForm()
    {
        $defaultData = [];
             

  
        $form = $this->createForm(HobbySearchType::class, $defaultData,
         array(
            'action' => $this->generateUrl('hobbysearchresult'),
            'method' => 'POST',
            )
        );     
        return $form;   
    }
        
   
    
    
    /**
     * @Route("/hobbysearchform", name="hobbysearchform")
     */
    public function hobbySearchFormAction(Request $request)
    {
        
        
        $form=$this->getSearchForm();
        
        return $this->render('AppBundle:HobbySearch:form.html.twig', array(

            'searchform' => $form->createView()
        ));        
    }
    
    /**
     * @Route("/hobbysearchresult", name="hobbysearchresult")
     */
    public function hobbySearchResultAction(Request $request)
    {
        $form=$this->getSearchForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $title=$form->getData()['title'];
            $hobbiesByTitle=$this
                ->getDoctrine()
                ->getManager()
                ->getRepository(Hobby::class)
                ->searchByTitle($title);
        }
        else
        {
            $hobbiesByTitle=[];
        }
        return $this->render('AppBundle:HobbySearch:result.html.twig', array(
            'hobbiesByTitle' => $hobbiesByTitle
        ));        
    }
}
