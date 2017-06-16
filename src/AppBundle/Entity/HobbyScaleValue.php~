<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HobbyScaleValue
 *
 * @ORM\Table(name="hobby_scale_values")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HobbyScaleValueRepository")
 */
class HobbyScaleValue
{
    /**
     * @ORM\ManyToOne(targetEntity="Hobby", inversedBy="hobbyScaleValues")
     * @ORM\Id
     * @ORM\JoinColumn(name="hobby_id", referencedColumnName="id", nullable=false)
     */
    private $hobby;
    
    /**
     * @ORM\ManyToOne(targetEntity="HobbyScale")
     * @ORM\Id
     * @ORM\JoinColumn(name="hobby_scale_id", referencedColumnName="id", nullable=false)
     */
    private $hobbyScale; 
    
    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;



    /**
     * Set value
     *
     * @param integer $value
     *
     * @return HobbyScaleValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set hobby
     *
     * @param \AppBundle\Entity\Hobby $hobby
     *
     * @return HobbyScaleValue
     */
    public function setHobby(\AppBundle\Entity\Hobby $hobby)
    {
        $this->hobby = $hobby;

        return $this;
    }

    /**
     * Get hobby
     *
     * @return \AppBundle\Entity\Hobby
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set hobbyScale
     *
     * @param \AppBundle\Entity\HobbyScale $hobbyScale
     *
     * @return HobbyScaleValue
     */
    public function setHobbyScale(\AppBundle\Entity\HobbyScale $hobbyScale)
    {
        $this->hobbyScale = $hobbyScale;

        return $this;
    }

    /**
     * Get hobbyScale
     *
     * @return \AppBundle\Entity\HobbyScale
     */
    public function getHobbyScale()
    {
        return $this->hobbyScale;
    }
}
