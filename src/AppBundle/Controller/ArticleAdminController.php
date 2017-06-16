<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use triguk\AuthorizationBundle\Controller\AuthBaseController;

/**
 * Article controller.
 *
 * @Route("articleadmin")
 */
class ArticleAdminController extends AuthBaseController
{

    public function __construct()
    {
        $this->entityClass=Article::class;
        $this->templatePrefix='article';
        $this->indexTitle='Список статей';
        $this->showTitle='Просмотр сведений о статье';
        $this->editTitle='Редактирование сведений о статье';
        $this->setDefaultPaths();
        
        $this->entityProperties=
        [
            [
                "name"=>"author",
                "label"=>"Автор",
                
            ],
            [
                "name"=>"title",
                "label"=>"Название"
            ],
            [
                "name"=>"shortContent",
                "label"=>"Краткое содержание",
                "doNotShowInIndex"=>true
            ],
            [
                "name"=>"fullContent",
                "label"=>"Полное содержание",
                "doNotShowInIndex"=>true
            ],
            [
                "name"=>"hobbies",
                "label"=>"Хобби",
                "doNotShowInIndex"=>true
                
            ],
            [
                "name"=>"dateCreated",
                "label"=>"Дата создания",
                
            ],
            [
                "name"=>"editor",
                "label"=>"Редактор",
                "doNotShowInIndex"=>true
                
            ],
            [
                "name"=>"dateModified",
                "label"=>"Дата редактирования",
                "doNotShowInIndex"=>true
            ],
        ];     
    }


    /**
     * Lists all article entities.
     *
     * @Route("/index/{page}", defaults={"page" = 1}, name="article_index")
     * @Method("GET")
     */
    public function indexAction(Request $request, $page)
    {
        
        return $this->baseIndexAction($request, $page);
    }

    /**
     * Creates a new article entity.
     *
     * @Route("/new", name="article_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        return $this->baseNewAction($request);
    }

    /**
     * Finds and displays a article entity.
     *
     * @Route("/{id}", name="article_show")
     * @Method("GET")
     */
    public function showAction(Article $article)
    {
        return $this->baseShowAction($article);
    }

    /**
     * Displays a form to edit an existing article entity.
     *
     * @Route("/{id}/edit", name="article_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Article $article)
    {
        return $this->baseEditAction($request, $article);
    }

    /**
     * Deletes a article entity.
     *
     * @Route("/{id}", name="article_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Article $article)
    {
        return $this->baseDeleteAction($reqest, $article);
    }


}
