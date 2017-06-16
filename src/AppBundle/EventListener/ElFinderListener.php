<?php 

namespace AppBundle\EventListener;


use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use AppBundle\Helper\UserDirectory;


class ElFinderListener
{

    private $userDirectory;

    public function __construct(UserDirectory $userDirectory)
    {
        $this->userDirectory=$userDirectory->getUserDirectory();
    }
    
    protected function isElfinderPath($path)
    {
       
        return strpos($path,'elfinder')!==false;
    }
    protected function http403()
    {
        throw new AccessDeniedHttpException("You are not authorized to perform this action.");
    }
    protected function getUsernameFromPath($path)
    {
        $lastSlashPos=strrpos($path,'/');
        return substr($path,$lastSlashPos+1);
    }
    protected function getCurrentPath()
    {
        
        $request = Request::createFromGlobals();
        return $request->getPathInfo();
    }
    
    public function onKernelController(FilterControllerEvent $event)
    {
        $path=$this->getCurrentPath();
        if ($this->isElfinderPath($path))
        {

            $correctUserDirectory=$this->userDirectory;
            $requestedUserDirectory=$this->getUsernameFromPath($path);

            if (($correctUserDirectory=='anonymous')
                ||($correctUserDirectory!=$requestedUserDirectory))
            { 
                
                $this->http403();
            }
        }
    }
        
}
