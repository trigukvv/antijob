<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use triguk\AuthorizationBundle\Entity\AuthObject;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class FillAuthObjectData extends AbstractFixture implements OrderedFixtureInterface,ContainerAwareInterface
{
    use ContainerAwareTrait;

    
    public function load(ObjectManager $manager)
    {

        $objects=[
            [
                'title'=>'AppBundle:User',
                'description'=>'Пользователи',
                'titleSingular'=>'Пользователь',
                'titlePlural'=>'Пользователи',
                'route'=>'user_index'
            ],
            [
                'title'=>'AppBundle:Article',
                'description'=>'Статьи',
                'titleSingular'=>'Статья',
                'titlePlural'=>'Статьи',
                'route'=>'article_index'
            ],
            [
                'title'=>'AppBundle:Comment',
                'description'=>'Комментарии',
                'titleSingular'=>'Комментарий',
                'titlePlural'=>'Комментарии',
                'route'=>'comment_index'
            ],
        ];
        
        foreach ($objects as $object)
        {
            $permission = new AuthObject();
            $permission->setName($object['title']);
            $permission->setDescription($object['description']);
            $permission->setTitleSingular($object['titleSingular']);
            $permission->setTitlePlural($object['titlePlural']);
            $permission->setRoute($object['route']);
            $manager->persist($permission);
        }   
        //$authObjectUser=$manager->getRepository(AuthObject::class)->findOneByName('AppBundle:User');
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }      
}
