<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\HobbyCategory;
use AppBundle\Entity\Hobby;
use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function defaultAction(Request $request)
    {
        return $this->redirectToRoute('articles');
    }

        
    /**
     * @Route("/articles/{page}", defaults={"page" = 1}, name="articles")
     */
    public function indexAction(Request $request,$page)
    {
        return $this->defaultIndex($request,$page);

    }
    
    /**
     * @Route("/category/{hobbyCategory}/{page}", defaults={"page" = 1}, name="categoryIndex")
     */
    public function categoryIndexAction(Request $request,HobbyCategory $hobbyCategory, $page)
    {
        return $this->defaultIndex($request,$page,$hobbyCategory);

    }

    /**
     * @Route("/hobby/{hobby}/{page}", defaults={"page" = 1}, name="hobbyIndex")
     */
    public function hobbyIndexAction(Request $request,Hobby $hobby, $page)
    {
        return $this->defaultIndex($request,$page,null,$hobby);

    }
    
    
            
    protected function defaultIndex(Request $request,$page=1,
        HobbyCategory $hobbyCategory=null, Hobby $hobby=null)
    {
        $articlesPaginator=$this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Article::class)
            ->getArticlePaginator($page,5,$hobbyCategory,$hobby);
        

        return $this->render('AppBundle:Default:index.html.twig', [
            'articlesPaginator' => $articlesPaginator,
            'page'=>$page,
            'baseRoute'=> $this->generateUrl($request->get('_route'),
                [
                    'hobbyCategory'=>$hobbyCategory? $hobbyCategory->getId():null,
                    'hobby'=>$hobby ? $hobby->getId() : null
                ]),
            'hobbyCategory'=>$hobbyCategory,
            'hobby'=>$hobby
        ]);
    }
}
