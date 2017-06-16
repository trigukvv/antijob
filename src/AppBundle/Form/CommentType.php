<?php
namespace AppBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use AppBundle\Entity\HobbyScale;
use AppBundle\Helper\HobbyScaleExtractor;

class CommentType extends AbstractType
{
    
    private $manager;

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
        
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('content', CKEditorType::class, array(
            'config' => array(
                'filebrowserBrowseRoute' => 'elfinder',
                'filebrowserBrowseRouteParameters' => array(
                    'instance' => 'default',
                    'homeFolder' => $options['userDirectory']
                )
            )))
            ->add('save', SubmitType::class,[
                'label'=>"Сохранить"
            ])->getForm();
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'userDirectory' => 'anonymous',
        ));
    }
}
