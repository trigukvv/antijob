<?php
namespace AppBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\HobbyScale;
use AppBundle\Helper\HobbyScaleExtractor;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HobbyChooserType extends AbstractType
{
    private $manager;

    public function __construct(EntityManager $manager, HobbyScaleExtractor $extractor)
    {
        $this->manager = $manager;
        $this->extractor = $extractor;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $hobbyScales=$this->extractor->getHobbyScales();

        
        foreach ($hobbyScales as $hobbyScale)
        {        
            $builder=$builder->add($hobbyScale->getInternalName(),  RangeType::class,
            [
                'attr' => [
                    'min' => 0,
                    'max' => 100,  
                ],
                'label'=>$hobbyScale->getTitle()
            ]
            );
            
        }    
        $builder=$builder
            //->add('send', SubmitType::class,['label'=>"Подобрать"])
            ->getForm();
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'csrf_protection' => false,
        ));
    }
}
