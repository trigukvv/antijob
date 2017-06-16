<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\HobbyCategory;

class LoadHobbyCategoryData extends AbstractFixture implements OrderedFixtureInterface
{ 
    
    public function load(ObjectManager $manager)
    {
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Спортивные');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $this->addReference('hobbyCategory1', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Единоборства');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory1'));           
        $this->addReference('hobbyCategory2', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Силовой тренинг');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory1'));          
        $this->addReference('hobbyCategory3', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Игры');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory1'));          
        $this->addReference('hobbyCategory4', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Зимние');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory1'));          
        $this->addReference('hobbyCategory5', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Экстремальные');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');        
        $this->addReference('hobbyCategory6', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Активные');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $this->addReference('hobbyCategory7', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Танцы');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory7'));          
        $this->addReference('hobbyCategory8', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Творческие');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $this->addReference('hobbyCategory9', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Рукоделие');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory9'));             
        $this->addReference('hobbyCategory10', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Музыка');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $hobbyCategory->setParentCategory($this->getReference('hobbyCategory9'));           
        $this->addReference('hobbyCategory11', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Фанатизм');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $this->addReference('hobbyCategory12', $hobbyCategory);         
        $manager->persist($hobbyCategory);
		
        $hobbyCategory = new HobbyCategory();
        $hobbyCategory->setTitle('Коллекционирование');
        $hobbyCategory->setDescription('Под воздействием изменяемого вектора гравитации устойчивость по Ляпунову характеризует устойчивый систематический уход.');
        $this->addReference('hobbyCategory13', $hobbyCategory);         
        $manager->persist($hobbyCategory);
 
        
         
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}
