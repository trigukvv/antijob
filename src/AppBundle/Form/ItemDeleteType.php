<?php
namespace AppBundle\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\HobbyScale;
use AppBundle\Helper\HobbyScaleExtractor;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class ItemDeleteType extends AbstractType
{
    
    private $manager;

    public function __construct(Router $router)
    {
        $this->router = $router;
        
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $item=$options['item'];
        $builder
            ->add('delete', SubmitType::class,[
                'label'=>"Удалить",
                'attr'=>[
                    'class'=>'btn btn-danger'
                ]                
            ])
            ->setAction($this->router->generate($options['route'], array(
                "item" => $item->getId()
            )))
            ->setMethod("DELETE")
            ->getForm();
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'item'=>null,
            'route'=>'default'
        ));
    }
}
