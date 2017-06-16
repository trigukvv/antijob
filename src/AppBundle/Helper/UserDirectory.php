<?php
namespace AppBundle\Helper;


use Doctrine\ORM\EntityManager;
use AppBundle\Entity\HobbyScale;
use AppBundle\Entity\Hobby;
use AppBundle\Helper\HobbyChooser;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

interface UserDirectory 
{

    public function getUserDirectory();
    
}
