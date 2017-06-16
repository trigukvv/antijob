<?php
namespace AppBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use AppBundle\Entity\HobbyScale;
use AppBundle\Helper\HobbyScaleExtractor;
use Doctrine\ORM\EntityRepository;


class ArticleType extends AbstractType
{
    
    private $manager;

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
        
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('title', TextType::class, ['label'=>'Название'])
            ->add('fullContent', CKEditorType::class, array(
            'config' => array(
                'filebrowserBrowseRoute' => 'elfinder',
                'filebrowserBrowseRouteParameters' => array(
                    'instance' => 'default',
                    'homeFolder' => $options['userDirectory']
                )),
             'label'=>'Полное содержание (отображается при просмотре статьи с комментариями)'   
            ))
            ->add('shortContent', CKEditorType::class, array(
            'config' => array(
                'filebrowserBrowseRoute' => 'elfinder',
                'filebrowserBrowseRouteParameters' => array(
                    'instance' => 'default',
                    'homeFolder' => $options['userDirectory']
                )),
             'label'=>'Краткое содержание (отображается при просмотре перечня статей)' 
            ))
            ->add('hobbies', EntityType::class, 
                [
                    'label'=>'Хобби',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('h')
                            ->orderBy('h.title', 'ASC');
                    },
                    'class'=>'AppBundle:Hobby',
                    'expanded'=>true,
                    'multiple'=>true,
                    
                ]
            )
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
