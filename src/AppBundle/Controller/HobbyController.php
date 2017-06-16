<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Hobby;

/**
 * Commodity controller.
 *
 * @Route("hobby")
 */  
 
class HobbyController extends Controller
{


    /**
     * @Route("/show/{hobby}", name="showHobby")
     */
    public function showAction(Request $request, Hobby $hobby)
    {
        
        return $this->render('AppBundle:Hobby:show.html.twig', array(
            'hobby'=>$hobby
        ));
    }
        
    /**
     * @Route("/edit/{hobby}", name="editHobby")
     */
    public function editAction(Request $request, Hobby $hobby)
    {

        $userDirectory=$this->get('app.helper.user_directory')->getUserDirectory();
        
        $form = $this->createForm('AppBundle\Form\HobbyType', $hobby, 
            [
                'userDirectory'=>$userDirectory
            ]);
        $form->handleRequest($request);
        



        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            
        }
        return $this->render('AppBundle:Hobby:edit.html.twig', array(
            'hobby'=>$hobby,
            'form'=>$form->createView()
        ));
    }
}
