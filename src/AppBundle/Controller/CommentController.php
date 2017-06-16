<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Comment;
use AppBundle\Entity\Article;
use AppBundle\Form\CommentType;
use AppBundle\Form\ItemDeleteType;

/**
 * Commodity controller.
 *
 * @Route("comment")
 */  
 
class CommentController extends Controller
{


    /**
     * @Route(name="showComment")
     */
    public function showAction(Request $request, Comment $comment)
    {
        
        return $this->render('AppBundle:Comment:show.html.twig', array(
            'comment'=>$comment,
            
        ));
    }
        
    /**
     * @Route("/edit/{comment}", name="editComment")
     */
    public function editAction(Request $request, Comment $comment)
    {
        $this->denyAccessUnlessGranted('update',$comment);
        $userDirectory=$this->get('app.helper.user_directory')->getUserDirectory();
        
        $form = $this->createForm('AppBundle\Form\CommentType', $comment, 
            [
                'userDirectory'=>$userDirectory
            ]);
        $form->handleRequest($request);
        



        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setEditor($this->getUser());
            $comment->setDateModified(new \DateTime);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('articleWithComments',['article'=>$comment->getArticle()->getId()]);
            
        }
        return $this->render('AppBundle:Comment:edit.html.twig', array(
            'comment'=>$comment,
            'form'=>$form->createView()
        ));
    }
    
    /**
     * @Route("/new/for/{article}", name="newComment")
     */
    public function newAction(Request $request, Article $article)
    {
        $this->denyAccessUnlessGranted('create',Comment::class);
        $userDirectory=$this->get('app.helper.user_directory')->getUserDirectory();
        $comment=new Comment();
        
        $form = $this->createForm(CommentType::class, $comment, 
            [
                'userDirectory'=>$userDirectory
            ]);
        $form->handleRequest($request);
        



        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setAuthor($this->getUser());
            $comment->setArticle($article);
            $comment->setDateCreated(new \DateTime);
            $manager=$this->getDoctrine()->getManager();
            $manager->persist($comment);
            $manager->flush();
            return $this->redirectToRoute('articleWithComments',['article'=>$article->getId()]);
            
        }
        return $this->render('AppBundle:Comment:edit.html.twig', array(
            'comment'=>$comment,
            'form'=>$form->createView()
        ));
    }
    

    /**
     * @Route("/delete/{item}", name="deleteComment")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Comment $item)
    {
        $comment=$item;
        $this->denyAccessUnlessGranted('delete', $comment);
        
        
        $form = $this->createForm(ItemDeleteType::class, $comment, 
            [
                'item'=>$comment,
                'route'=>'deleteComment'
            ]);
        $form->handleRequest($request);
        $article=$comment->getArticle();
        if ($form->isSubmitted() && $form->isValid()) {
            $manager=$this->getDoctrine()->getManager();
            $manager->remove($comment);
            $manager->flush();
            
            
        }
        return $this->redirectToRoute('articleWithComments',['article'=>$article->getId()]);
        
    }
}
