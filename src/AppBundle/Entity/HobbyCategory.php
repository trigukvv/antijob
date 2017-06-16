<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HobbyCategory
 *
 * @ORM\Table(name="hobby_categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HobbyCategoryRepository")
 */
class HobbyCategory
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;
    
    /**
     * @ORM\OneToMany(targetEntity="Hobby", mappedBy="hobbyCategory")
     */
    private $hobbies;
    
    
     /**
     * @ORM\OneToMany(targetEntity="HobbyCategory", mappedBy="parentCategory")
     */
    private $childCategories;     
    
    
    /**
     * @ORM\ManyToOne(targetEntity="HobbyCategory", inversedBy="childCategories")
     * @ORM\JoinColumn(name="parent_category_id", referencedColumnName="id")
     */
    private $parentCategory;    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hobbies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childCategories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return HobbyCategory
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
     * @return HobbyCategory
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
     * Add hobby
     *
     * @param \AppBundle\Entity\Hobby $hobby
     *
     * @return HobbyCategory
     */
    public function addHobby(\AppBundle\Entity\Hobby $hobby)
    {
        $this->hobbies[] = $hobby;

        return $this;
    }

    /**
     * Remove hobby
     *
     * @param \AppBundle\Entity\Hobby $hobby
     */
    public function removeHobby(\AppBundle\Entity\Hobby $hobby)
    {
        $this->hobbies->removeElement($hobby);
    }

    /**
     * Get hobbies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Add childCategory
     *
     * @param \AppBundle\Entity\HobbyCategory $childCategory
     *
     * @return HobbyCategory
     */
    public function addChildCategory(\AppBundle\Entity\HobbyCategory $childCategory)
    {
        $this->childCategories[] = $childCategory;

        return $this;
    }

    /**
     * Remove childCategory
     *
     * @param \AppBundle\Entity\HobbyCategory $childCategory
     */
    public function removeChildCategory(\AppBundle\Entity\HobbyCategory $childCategory)
    {
        $this->childCategories->removeElement($childCategory);
    }

    /**
     * Get childCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildCategories()
    {
        return $this->childCategories;
    }

    /**
     * Set parentCategory
     *
     * @param \AppBundle\Entity\HobbyCategory $parentCategory
     *
     * @return HobbyCategory
     */
    public function setParentCategory(\AppBundle\Entity\HobbyCategory $parentCategory = null)
    {
        $this->parentCategory = $parentCategory;

        return $this;
    }

    /**
     * Get parentCategory
     *
     * @return \AppBundle\Entity\HobbyCategory
     */
    public function getParentCategory()
    {
        return $this->parentCategory;
    }
    
        public function __toString()
    {
		return $this->title;
	}   
}
