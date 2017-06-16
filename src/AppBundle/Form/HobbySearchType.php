<?php
namespace AppBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\HobbyScale;
use AppBundle\Helper\HobbyScaleExtractor;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HobbySearchType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',TextType::class,['label'=>'Название:'])    
                ->getForm();
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'csrf_protection' => false,
        ));
    }
}
