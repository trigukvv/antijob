<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Hobby;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use triguk\AuthorizationBundle\Controller\AuthBaseController;

/**
 * Hobby controller.
 *
 * @Route("hobbyadmin")
 */
class HobbyAdminController extends AuthBaseController
{

    public function __construct()
    {
        $this->entityClass=Hobby::class;
        $this->templatePrefix='hobby';
        $this->indexTitle='Список хобби';
        $this->showTitle='Просмотр хобби';
        $this->editTitle='Редактирование хобби';
        $this->setDefaultPaths();
        
        $this->entityProperties=
        [
            [
                "name"=>"title",
                "label"=>"Название",
                
            ],            
            [
                "name"=>"description",
                "label"=>"Описание",
            ],
            [
                "name"=>"hobbyCategory",
                "label"=>"Категория",
            ],            
        ];     
    }


    /**
     * Lists all hobby entities.
     *
     * @Route("/index/{page}", defaults={"page" = 1}, name="hobby_index")
     * @Method("GET")
     */
    public function indexAction(Request $request, $page)
    {
        return $this->baseIndexAction($request, $page);
    }

    /**
     * Creates a new hobby entity.
     *
     * @Route("/new", name="hobby_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        return $this->baseNewAction($request);
    }

    /**
     * Finds and displays a hobby entity.
     *
     * @Route("/{id}", name="hobby_show")
     * @Method("GET")
     */
    public function showAction(Hobby $hobby)
    {
        return $this->baseShowAction($hobby);
    }

    /**
     * Displays a form to edit an existing hobby entity.
     *
     * @Route("/{id}/edit", name="hobby_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Hobby $hobby)
    {
        return $this->baseEditAction($request, $hobby);
    }

    /**
     * Deletes a hobby entity.
     *
     * @Route("/{id}", name="hobby_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Hobby $hobby)
    {
        return $this->baseDeleteAction($reqest, $hobby);
    }


}
