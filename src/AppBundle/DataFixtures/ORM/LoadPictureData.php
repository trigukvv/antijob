<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Picture;

class LoadPictureData extends AbstractFixture implements OrderedFixtureInterface
{ 
    
    public function load(ObjectManager $manager)
    {
		/*
         
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-1');
        $picture->setSequentialNumber(1);
        $picture->setArticle($this->getReference('article1'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-2');
        $picture->setSequentialNumber(2);
        $picture->setArticle($this->getReference('article2'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-3');
        $picture->setSequentialNumber(3);
        $picture->setArticle($this->getReference('article3'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-4');
        $picture->setSequentialNumber(4);
        $picture->setArticle($this->getReference('article4'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-5');
        $picture->setSequentialNumber(5);
        $picture->setArticle($this->getReference('article5'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-6');
        $picture->setSequentialNumber(6);
        $picture->setArticle($this->getReference('article6'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-7');
        $picture->setSequentialNumber(7);
        $picture->setArticle($this->getReference('article7'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-8');
        $picture->setSequentialNumber(8);
        $picture->setArticle($this->getReference('article8'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-9');
        $picture->setSequentialNumber(9);
        $picture->setArticle($this->getReference('article9'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-10');
        $picture->setSequentialNumber(10);
        $picture->setArticle($this->getReference('article10'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-11');
        $picture->setSequentialNumber(11);
        $picture->setArticle($this->getReference('article11'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-12');
        $picture->setSequentialNumber(12);
        $picture->setArticle($this->getReference('article12'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-13');
        $picture->setSequentialNumber(13);
        $picture->setArticle($this->getReference('article13'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-14');
        $picture->setSequentialNumber(14);
        $picture->setArticle($this->getReference('article14'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-15');
        $picture->setSequentialNumber(15);
        $picture->setArticle($this->getReference('article15'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-16');
        $picture->setSequentialNumber(16);
        $picture->setArticle($this->getReference('article16'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-17');
        $picture->setSequentialNumber(17);
        $picture->setArticle($this->getReference('article17'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-18');
        $picture->setSequentialNumber(18);
        $picture->setArticle($this->getReference('article18'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-19');
        $picture->setSequentialNumber(19);
        $picture->setArticle($this->getReference('article19'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-20');
        $picture->setSequentialNumber(20);
        $picture->setArticle($this->getReference('article20'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-21');
        $picture->setSequentialNumber(21);
        $picture->setArticle($this->getReference('article21'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-22');
        $picture->setSequentialNumber(22);
        $picture->setArticle($this->getReference('article22'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-23');
        $picture->setSequentialNumber(23);
        $picture->setArticle($this->getReference('article23'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-24');
        $picture->setSequentialNumber(24);
        $picture->setArticle($this->getReference('article24'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-25');
        $picture->setSequentialNumber(25);
        $picture->setArticle($this->getReference('article25'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-26');
        $picture->setSequentialNumber(26);
        $picture->setArticle($this->getReference('article26'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-27');
        $picture->setSequentialNumber(27);
        $picture->setArticle($this->getReference('article27'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-28');
        $picture->setSequentialNumber(28);
        $picture->setArticle($this->getReference('article28'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-29');
        $picture->setSequentialNumber(29);
        $picture->setArticle($this->getReference('article29'));        
        $manager->persist($picture);
		
        $picture = new Picture();
        $picture->setContent('КАРТИНКА-30');
        $picture->setSequentialNumber(30);
        $picture->setArticle($this->getReference('article30'));        
        $manager->persist($picture);
             
        $manager->flush();
        */
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 40;
    }
}
