<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;
use AppBundle\Entity\User;
use AppBundle\Form\ItemDeleteType;

/**
 * Commodity controller.
 *
 * @Route("article")
 */  
 
class ArticleController extends Controller
{
    /**
     * @Route("/preview/{article}", name="previewsArticle")
     */
    public function previewAction(Request $request, Article $article)
    {
        
        return $this->render('AppBundle:Article:preview.html.twig', array(
            'article'=>$article
        ));
    }

    /**
     * @Route("/show/{article}/{page}", defaults={"page" = 1}, name="articleWithComments")
     */
    public function articleWithCommentsAction(Request $request,Article $article, $page)
    {
        $commentsPaginator=$this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Comment::class)
            ->getCommentPaginator($page,5,$article);
        $commentDeleteForms=[];
        foreach ($commentsPaginator as $comment)
        {
            if ($this->isGranted('delete',$comment))
            {
                $commentDeleteForms[$comment->getId()]=
                    $this->createForm(ItemDeleteType::class, $comment, 
                        [
                            'item'=>$comment,
                            'route'=>'deleteComment'
                        ])
                        ->createView();
            }
        }
            
        return $this->render('AppBundle:Default:index.html.twig', [
            'article'=>$article,
            'hobbyCategory'=>null,
            'hobby'=>$article->getHobbies()[0],
            'commentsPaginator' => $commentsPaginator,
            'page'=>$page,
            'baseRoute'=> $this->generateUrl($request->get('_route'),
                [
                    'article'=>$article->getId()
                ]),
            'delete_form'=>$this->createDeleteForm($article)->createView(),
            'commentDeleteForms'=>$commentDeleteForms
        ]);

    }
    
        
    /**
     * @Route("/edit/{article}", name="editArticle")
     */
    public function editAction(Request $request, Article $article)
    {
        $this->denyAccessUnlessGranted('update', $article);
        $userDirectory=$this->get('app.helper.user_directory')->getUserDirectory();
        
        
        $form = $this->createForm('AppBundle\Form\ArticleType', $article, 
            [
                'userDirectory'=>$userDirectory
            ]);
        $form->handleRequest($request);
        



        if ($form->isSubmitted() && $form->isValid()) {
            $article->setEditor($this->getUser());
            $article->setDateModified(new \DateTime());
            $manager=$this->getDoctrine()->getManager();
            $manager->flush();
            return $this->redirectToRoute('articleWithComments',['article'=>$article->getId()]);
            $this->getDoctrine()->getManager()->flush();

            
        }
        return $this->render('AppBundle:Article:edit.html.twig', array(
            'article'=>$article,
            'form'=>$form->createView()
        ));
    }
    
/**
     * @Route("/new", name="newArticle")
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('create', Article::class);
        $article=new Article();
        $userDirectory=$this->get('app.helper.user_directory')->getUserDirectory();
        
        
        $form = $this->createForm('AppBundle\Form\ArticleType', $article, 
            [
                'userDirectory'=>$userDirectory
            ]);
        $form->handleRequest($request);
        



        if ($form->isSubmitted() && $form->isValid()) {
            $article->setAuthor($this->getUser());
            $article->setDateCreated(new \DateTime());
            $manager=$this->getDoctrine()->getManager();
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('articleWithComments',['article'=>$article->getId()]);

            
        }
        return $this->render('AppBundle:Article:edit.html.twig', array(
            'article'=>$article,
            'form'=>$form->createView()
        ));
    }
    
    private function createDeleteForm($item)
    {
        return $this->createForm(ItemDeleteType::class, $item, 
                        [
                            'item'=>$item,
                            'route'=>'deleteArticle'
                        ]);
    }
    
    /**
     * @Route("/delete/{item}", name="deleteArticle")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Article $item)
    {
        $article=$item;
        $this->denyAccessUnlessGranted('delete', $article);
        
        
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $repository = $this
                            ->getDoctrine()
                            ->getManager()
                            ->getRepository(Article::class);
            $repository->delete($article);
            
            
        }
        return $this->redirectToRoute('articles');
    }
}
