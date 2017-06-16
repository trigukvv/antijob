<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use triguk\AuthorizationBundle\Controller\AuthBaseController;

/**
 * Comment controller.
 *
 * @Route("commentadmin")
 */
class CommentAdminController extends AuthBaseController
{

    public function __construct()
    {
        $this->entityClass=Comment::class;
        $this->templatePrefix='comment';
        $this->indexTitle='Список комментариев';
        $this->showTitle='Просмотр комментариев';
        $this->editTitle='Редактирование комментариев';
        $this->setDefaultPaths();
        
        $this->entityProperties=
        [
            [
                "name"=>"author",
                "label"=>"Автор",
                
            ],            
            [
                "name"=>"content",
                "label"=>"Содержание",
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
     * Lists all comment entities.
     *
     * @Route("/index/{page}", defaults={"page" = 1}, name="comment_index")
     * @Method("GET")
     */
    public function indexAction(Request $request, $page)
    {
        return $this->baseIndexAction($request, $page);
    }

    /**
     * Creates a new comment entity.
     *
     * @Route("/new", name="comment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        return $this->baseNewAction($request);
    }

    /**
     * Finds and displays a comment entity.
     *
     * @Route("/{id}", name="comment_show")
     * @Method("GET")
     */
    public function showAction(Comment $comment)
    {
        return $this->baseShowAction($comment);
    }

    /**
     * Displays a form to edit an existing comment entity.
     *
     * @Route("/{id}/edit", name="comment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Comment $comment)
    {
        return $this->baseEditAction($request, $comment);
    }

    /**
     * Deletes a comment entity.
     *
     * @Route("/{id}", name="comment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Comment $comment)
    {
        return $this->baseDeleteAction($reqest, $comment);
    }


}
