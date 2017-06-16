<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\HobbyScale;

class LoadHobbyScaleData extends AbstractFixture implements OrderedFixtureInterface
{ 
    
    public function load(ObjectManager $manager)
    {
        $scales=[
            [
                'internalName'=>'creativityScale',
                'icon'=>'assets/svg/creativity-scale.svg',
                'title'=>'Рейтинг креативности',
                'description'=>'Креативные хобби - это создание чего-то нового, творческого. Чем выше рейтинг креативности, тем разнообразнее и сложнее процесс творчества.',
            ],
            [
                'internalName'=>'activityScale',
                'icon'=>'assets/svg/activity-scale.svg',
                'title'=>'Рейтинг активности',
                'description'=>'Активные хобби требуют физической активности. Чем выше рейтинг активности, тем выше спортивная нагрузка.',
            ],
            [
                'internalName'=>'priceScale',
                'title'=>'Рейтинг стоимости',
                'icon'=>'assets/svg/price-scale.svg',
                'description'=>'Не все хооби одинаково дешевы. Чем выше рейтинг стоимости, тем дороже занятие любимым делом.',
            ],
        ];
        
        foreach ($scales as $scale)
        {
            $hobbyScale=new HobbyScale();
            $hobbyScale->setInternalName($scale['internalName']);
            $hobbyScale->setIcon($scale['icon']);
            $hobbyScale->setTitle($scale['title']);
            $hobbyScale->setDescription($scale['description']);
            $manager->persist($hobbyScale);
            $this->addReference($scale['internalName'],$hobbyScale);
        }
         
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}
