<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Helper\HobbyScaleExtractor;
use AppBundle\Form\HobbyChooserType;
use AppBundle\Repository\HobbyRepository;

class HobbyChooserController extends Controller
{
    
    protected function getChooseForm()
    {
        $defaultData = [];
        $extractor=$this->container->get('app.helper.hobby_scale_extractor');
        $hobbyScales=$extractor->getHobbyScales();        

        foreach ($hobbyScales as $hobbyScale)
        {
            $defaultData[$hobbyScale->getInternalName()]=0;    
        }   
             
        $form = $this->createForm(HobbyChooserType::class, $defaultData,
         array(
            'action' => $this->generateUrl('hobbychooserresult'),
            'method' => 'POST',
            )
        );     
        return $form;   
    }

    /**
     * @Route("/hobbychooserform", name="hobbychooserform")
     */
    public function hobbyChooserFormAction(Request $request)
    {
        
        
        $form=$this->getChooseForm();
        
        return $this->render('AppBundle:HobbyChooser:form.html.twig', array(

            'chooserform' => $form->createView()
        ));        
    }
    
    /**
     * @Route("/hobbychooserresult", name="hobbychooserresult")
     */
    public function hobbyChooserResultAction(Request $request)
    {
        $form=$this->getChooseForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $chooser=$this->container->get('app.helper.hobby_chooser');
            $hobbiesByScaleValues=$chooser->getHobbiesByScaleValues($form->getData());
        }
        else
        {
            $hobbiesByScaleValues=[];
        }
        return $this->render('AppBundle:HobbyChooser:result.html.twig', array(
            'hobbiesByScaleValues' => $hobbiesByScaleValues
        ));        
    }
    
  
}
