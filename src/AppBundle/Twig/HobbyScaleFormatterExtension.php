<?php

namespace AppBundle\Twig;

use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Formatter\HobbyScaleFormatter;



class HobbyScaleFormatterExtension extends \Twig_Extension
{
    
    private $hobbyScaleFormatter;


    public function __construct(HobbyScaleFormatter $hobbyScaleFormatter)
    {
        
        $this->hobbyScaleFormatter = $hobbyScaleFormatter;

    }    
    
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('convertHobbyScaleValue', array($this, 'convertHobbyScaleValueFilter'))
        );
    }


    public function convertHobbyScaleValueFilter($value)
    {
        return $this->hobbyScaleFormatter->databaseValueToScreen($value);
        
    }
}
