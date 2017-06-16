<?php

namespace AppBundle\Logic;

use AppBundle\Entity\Hobby;
use AppBundle\Entity\HobbyScale;
use AppBundle\Entity\HobbyScaleValue;
use Doctrine\ORM\EntityManager;


class HobbyLogic 
{

    protected $manager, $hobbyRepository, $hobbyScaleRepository,$hobbyScaleValueRepository;
    
    const DEFAULT_SCALE_VALUE=0;
    
    public function __construct(EntityManager $manager)
    {
        $this->manager=$manager;
        $this->hobbyRepository=$manager->getRepository(Hobby::class);
        $this->hobbyScaleRepository=$manager->getRepository(HobbyScale::class);
        $this->hobbyScaleValueRepository=$manager->getRepository(HobbyScaleValue::class);

    }
    protected function addHobbyScaleValue(Hobby $hobby, HobbyScale $hobbyScale, $value)
    {
        $hobbyScaleValue=new HobbyScaleValue();
        $hobbyScaleValue->setHobby($hobby);
        $hobbyScaleValue->setHobbyScale($hobbyScale);
        $hobbyScaleValue->setValue($value);
        $this->manager->persist($hobbyScaleValue);
        $this->manager->flush();
    }
    public function setHobbyScaleValue(Hobby $hobby, HobbyScale $hobbyScale, $value)
    {
        $hobbyScaleValue=$this->hobbyScaleValueRepository->findOneBy(
            [
                'hobby'=>$hobby,
                'hobbyScale'=>$hobbyScale
            ]);
        if ($hobbyScaleValue) 
        {
            $hobbyScaleValue->setValue($value);
        }
        else
        {
            $this->addHobbyScaleValue($hobby, $hobbyScale, $value);
            
        }   
        $this->manager->flush(); 
    }
    public function getHobbyScaleValue(Hobby $hobby, HobbyScale $hobbyScale)
    {
        $hobbyScaleValue=$this->hobbyScaleValueRepository->findOneBy(
            [
                'hobby'=>$hobby,
                'hobbyScale'=>$hobbyScale
            ]);
        if ($hobbyScaleValue) 
            return $hobbyScaleValue->getValue();
        else
        {
            $this->addHobbyScaleValue($hobby, $hobbyScale, DEFAULT_SCALE_VALUE);
            $this->manager->flush();
            return DEFAULT_SCALE_VALUE;
        }
        
    }   
    public function getAllHobbyScaleValues(Hobby $hobby)
    {
        $hobbyScales=$this->hobbyScaleRepository->findAll();
        $values=[];
        foreach ($hobbyScales as $hobbyScale)
        {
            $values[]=[
                'scale'=>$hobbyScale,
                'value'=>$this->getHobbyScaleValue($hobby,$hobbyScale)
            ];
        }
        return values;
    }
    
}
