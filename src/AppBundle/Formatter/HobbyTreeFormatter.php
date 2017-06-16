<?php
namespace AppBundle\Formatter;

use Doctrine\ORM\EntityManager;


class HobbyTreeFormatter
{
    protected $manager,$hobbyCategoryRepository,$hobbyRepository;
    
    public function __construct(EntityManager $manager)
    {
        $this->manager=$manager;
        $this->hobbyCategoryRepository=$manager->getRepository('AppBundle:HobbyCategory');
        $this->hobbyRepository=$manager->getRepository('AppBundle:Hobby');
    } 
    protected function getCategoriesAssoc($elements)
    {
        $newArray=[];
        foreach ($elements as $element)
        {
            $parentCategory=$element->getParentCategory();
            $parentId=$parentCategory? $parentCategory->getId() : 0;
            if (!array_key_exists($parentId,$newArray)) $newArray[$parentId]=[];
            $newArray[$parentId][]=$element;
        }
        return $newArray;
    }
    protected function getHobbiesAssoc($hobbies)
    {
        $newArray=[];
        foreach ($hobbies as $hobby)
        {
            $category=$hobby->getHobbyCategory();
            $id=$category? $category->getId() : 0;
            if (!array_key_exists($id,$newArray)) $newArray[$id]=[];
            $newArray[$id][]=$hobby;
        }
        return $newArray;
    }
    protected function getTree($categories,$hobbies)
    {
        $categoriesAssoc=$this->getCategoriesAssoc($categories);
        $hobbiesAssoc=$this->getHobbiesAssoc($hobbies);
        $tree=[];
        foreach ($categoriesAssoc[0] as $category)
        {
            $tree[]=[
                'node'=>$category,
                'children'=>$this->findChildren($category,$categoriesAssoc,$hobbiesAssoc),
                'leafs'=>array_key_exists($category->getId(),$hobbiesAssoc) ? 
                            $hobbiesAssoc[$category->getId()] : []
            ];

        }
        return $tree;
    }
    protected function findChildren($parentCategory,$categoriesAssoc,$hobbiesAssoc)
    {
        $children=[];
        if (array_key_exists($parentCategory->getId(),$categoriesAssoc))
        {
            foreach ($categoriesAssoc[$parentCategory->getId()] as $category)
            {
                $children[]=[
                    'node'=>$category,
                    'children'=>$this->findChildren($category,$categoriesAssoc,$hobbiesAssoc),
                    'leafs'=>array_key_exists($category->getId(),$hobbiesAssoc) ? 
                            $hobbiesAssoc[$category->getId()] : []
                ];
            }    
        }
        return $children;
    }
    public function getHobbyTree()
    {
        $allCategories=$this->hobbyCategoryRepository->findAll();
        $allHobbies=$this->hobbyRepository->getAllHobbiesWithScaleValues();
        //$allHobbies=$this->hobbyRepository->findAll();
        //$allHobbies=$this->hobbyRepository->getAllHobbiesWithScaleValues();

        return $this->getTree( $allCategories,$allHobbies);
        
    }
}
