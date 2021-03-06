<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hobby
 *
 * @ORM\Table(name="hobbies")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HobbyRepository")
 */
class Hobby
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="HobbyScaleValue", mappedBy="hobby")
     */
    private $hobbyScaleValues;


    
    /**
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="hobbies")
     */
    private $articles;  
    
    
     /**
     * @ORM\ManyToOne(targetEntity="HobbyCategory", inversedBy="hobbies")
     * @ORM\JoinColumn(name="hobby_category_id", referencedColumnName="id")
     */
    private $hobbyCategory;  

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="moderatesHobbies")
     */
    private $moderators;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Hobby
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Hobby
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Hobby
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set hobbyCategory
     *
     * @param \AppBundle\Entity\HobbyCategory $hobbyCategory
     *
     * @return Hobby
     */
    public function setHobbyCategory(\AppBundle\Entity\HobbyCategory $hobbyCategory = null)
    {
        $this->hobbyCategory = $hobbyCategory;

        return $this;
    }

    /**
     * Get hobbyCategory
     *
     * @return \AppBundle\Entity\HobbyCategory
     */
    public function getHobbyCategory()
    {
        return $this->hobbyCategory;
    }


    /**
     * Add hobbyScaleValue
     *
     * @param \AppBundle\Entity\HobbyScaleValue $hobbyScaleValue
     *
     * @return Hobby
     */
    public function addHobbyScaleValue(\AppBundle\Entity\HobbyScaleValue $hobbyScaleValue)
    {
        $this->hobbyScaleValues[] = $hobbyScaleValue;

        return $this;
    }

    /**
     * Remove hobbyScaleValue
     *
     * @param \AppBundle\Entity\HobbyScaleValue $hobbyScaleValue
     */
    public function removeHobbyScaleValue(\AppBundle\Entity\HobbyScaleValue $hobbyScaleValue)
    {
        $this->hobbyScaleValues->removeElement($hobbyScaleValue);
    }

    /**
     * Get hobbyScaleValues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHobbyScaleValues()
    {
        return $this->hobbyScaleValues;
    }


    /**
     * Add moderator
     *
     * @param \AppBundle\Entity\User $moderator
     *
     * @return Hobby
     */
    public function addModerator(\AppBundle\Entity\User $moderator)
    {
        $this->moderators[] = $moderator;

        return $this;
    }

    /**
     * Remove moderator
     *
     * @param \AppBundle\Entity\User $moderator
     */
    public function removeModerator(\AppBundle\Entity\User $moderator)
    {
        $this->moderators->removeElement($moderator);
    }

    /**
     * Get moderators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModerators()
    {
        return $this->moderators;
    }
    
    public function __toString()
    {
        return $this->getTitle();
    }
}
