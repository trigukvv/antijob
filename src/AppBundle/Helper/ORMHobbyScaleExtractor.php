<?php
namespace AppBundle\Helper;


use Doctrine\ORM\EntityManager;
use AppBundle\Entity\HobbyScale;
use AppBundle\Helper\HobbyScaleExtractor;

class ORMHobbyScaleExtractor implements HobbyScaleExtractor
{
    private $manager, $hobbyScaleRepository;

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
        $this->hobbyScaleRepository=$manager->getRepository(HobbyScale::class);
    }

    public function getHobbyScales()
    {
        $hobbyScales=$this->hobbyScaleRepository->findAll();
        return $hobbyScales;
    }
}
