<?php
namespace AppBundle\Helper;


use Doctrine\ORM\EntityManager;
use AppBundle\Entity\HobbyScale;
use AppBundle\Entity\Hobby;
use AppBundle\Helper\HobbyChooser;

class ORMHobbyChooser implements HobbyChooser
{
    private $manager, $hobbyScaleRepository;

    const MAX_HOBBIES_RETURNED=20;

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
        $this->hobbyRepository=$manager->getRepository(Hobby::class);
        $this->hobbyScaleRepository=$manager->getRepository(HobbyScale::class);
    }
    protected function getHobbyScaleValues(Hobby $hobby)
    {
        $scaleValueEntities=$hobby->getHobbyScaleValues();
        $scaleValueArray=[];
        foreach($scaleValueEntities as $scaleValueEntity)
        {
            $scaleValueArray[$scaleValueEntity->getHobbyScale()->getInternalName()]=$scaleValueEntity->getValue();
        }
        return $scaleValueArray;
    }
    protected function getHobbyScaleDifference(Hobby $hobby, $scaleValueArray)
    {
        $difference=0;
        $hobbyScaleValueArray=$this->getHobbyScaleValues($hobby);
        foreach($hobbyScaleValueArray as $scaleInternalName=>$scaleValue)
        {
            $difference+=abs($scaleValue-$scaleValueArray[$scaleInternalName]);
        }
        return $difference;
    }
    protected function getHobbyArrayWithDifferenceKeys($hobbies,$scaleValueArray)
    {
        $hobbyArrayWithDifferenceKeys=[];
        foreach ($hobbies as $hobby)
        {
            $difference=$this->getHobbyScaleDifference($hobby,$scaleValueArray);
            if (!array_key_exists($difference,$hobbyArrayWithDifferenceKeys)) 
                $hobbyArrayWithDifferenceKeys[$difference]=[];
            
            $hobbyArrayWithDifferenceKeys[$difference][]=$hobby;     
        }
        return $hobbyArrayWithDifferenceKeys;
    }
    public function getHobbiesByScaleValues($scaleValueArray)
    {
        $hobbyScales=$this->hobbyScaleRepository->findAll();
        $hobbies=$this->hobbyRepository->getAllHobbiesWithScaleValues();
        $hobbiesSorted=$this->getHobbyArrayWithDifferenceKeys($hobbies,$scaleValueArray);
        ksort($hobbiesSorted);
        
        $hobbiesFound=[];
        $count=0;
        foreach ($hobbiesSorted as $subArray)
        {
            foreach ($subArray as $hobby)
            {
                $hobbiesFound[]=$hobby;
                $count++;
                if ($count>=self::MAX_HOBBIES_RETURNED)
                    return $hobbiesFound;
            }
        }
    }
}
