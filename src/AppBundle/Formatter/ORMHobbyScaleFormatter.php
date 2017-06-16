<?php
namespace AppBundle\Formatter;



class ORMHobbyScaleFormatter implements HobbyScaleFormatter
{
    
    public function databaseValueToScreen($value)
    {
        return sprintf("%.1f",($value/20));
    }
}
