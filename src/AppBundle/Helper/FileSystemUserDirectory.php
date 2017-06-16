<?php
namespace AppBundle\Helper;


use Doctrine\ORM\EntityManager;
use AppBundle\Entity\HobbyScale;
use AppBundle\Entity\Hobby;
use AppBundle\Helper\HobbyChooser;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class FileSystemUserDirectory implements UserDirectory
{
    /**
     * @var TokenStorage
     */
    protected $tokenStorage,$rootDirectory;


    /**
     * @param \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage    $tokenStorage
     */
    public function __construct(TokenStorage $tokenStorage,$rootDirectory)
    {
        $this->tokenStorage = $tokenStorage;
        $this->rootDirectory=$rootDirectory;
    }    
    protected function createUserDirectoryIfNotExist($userDirectory)
    {
        $webRoot=realpath($this->rootDirectory . '/../web');
        $fullUserDirectory=$webRoot.'/uploads/'.$userDirectory;
        if (!file_exists($fullUserDirectory))
        {
            mkdir($fullUserDirectory);
        }
    }
    
    public function getUserDirectory()
    {
        $userDirectory='anonymous';
        $token=$this->tokenStorage->getToken();
        if ($token) 
        {
            $user=$token->getUser();
            if ($user instanceof UserInterface)
            {
                $id=$user->getId();
                $userDirectory="user$id";
                $this->createUserDirectoryIfNotExist($userDirectory);
            }
        }
        return $userDirectory;
    }
}
