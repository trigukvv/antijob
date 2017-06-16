<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $user->setPassword(password_hash("pass", PASSWORD_BCRYPT));
        $user->setIsActive('1');
        $this->addReference('admin', $user);
        $manager->persist($user);
        		
        $user = new User();
        $user->setUsername('Adoginn');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Adoginn@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user1', $user);
        $manager->persist($user);
        
        $user = new User();
        $user->setUsername('Tuzil');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Tuzil@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user2', $user);
        $manager->persist($user);
        
        $user = new User();
        $user->setUsername('Granaya12');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Ganaya12@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user3', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Yggllador');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Yggllador@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user4', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Zann');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Zann@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user5', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Andromanadar');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Andromanadar@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user6', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Sharpsong');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Sharpsong@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user7', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Cedor');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Cedor@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user8', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Thetara');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Thetara@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user9', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('granaya55');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('granaya55@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user10', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Akihn');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Akihn@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user11', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Felotus');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Felotus@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user12', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Centritus');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Centritus@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user13', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Gazahn');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Gazahn@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user14', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Kador');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Kador@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user15', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Whitewood');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Whitewood@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user16', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Thoswyn');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Thoswyn@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user17', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Kazrall');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Kazrall@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user18', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Cerelsa');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Cerelsa@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user19', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Steelfist');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Steelfist@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user20', $user);
        $manager->persist($user);         
        
        $user = new User();
        $user->setUsername('Blackbrand');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Blackbrand@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user21', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Mar');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Mar@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user22', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Rockbreaker');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Rockbreaker@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user23', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Cordatus');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Cordatus@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user24', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Lador');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Lador@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user25', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Borius');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Borius@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user26', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Arashigal');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Arashigal@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user27', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Zolojin');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Zolojin@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user28', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Kazralmaran');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Kazralmaran@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user29', $user);
        $manager->persist($user);     
        
        $user = new User();
        $user->setUsername('Vudojinn');
        $user->setPassword(password_hash("12345678", PASSWORD_BCRYPT));
        $user->setEmail('Vudojinn@gmail.com');
        $user->setIsActive('1');
        $this->addReference('user30', $user);
        $manager->persist($user);        
       
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }    
}
