<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use triguk\AuthorizationBundle\Entity\HasOwner;
use triguk\AuthorizationBundle\Entity\HasGroups;

/**
 * Article
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article implements HasOwner, HasGroups
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $dateCreated; 
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $dateModified; 

    /**
     * @var string
     *
     * @ORM\Column(name="full_content", type="text", nullable=true)
     */
    private $fullContent;

    /**
     * @var string
     *
     * @ORM\Column(name="short_content", type="text", nullable=true)
     */
    private $shortContent;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_visible", type="boolean", nullable=true, options={"default" : 1})
     */
    private $isVisible;
    
    /**
     * @ORM\ManyToMany(targetEntity="Hobby", inversedBy="articles")
     */
    private $hobbies;    
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="articlesAuthorOf")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author; 
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="articlesEditorOf")
     * @ORM\JoinColumn(name="editor_id", referencedColumnName="id", nullable=true)
     */
    private $editor; 
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="article")
     */
    private $comments;       
    
    
    /**
     * @ORM\OneToMany(targetEntity="Picture", mappedBy="article")
     */
    private $pictures;           
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hobbies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pictures = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fullContent
     *
     * @param string $fullContent
     *
     * @return Article
     */
    public function setFullContent($fullContent)
    {
        $this->fullContent = $fullContent;

        return $this;
    }

    /**
     * Get fullContent
     *
     * @return string
     */
    public function getFullContent()
    {
        return $this->fullContent;
    }

    /**
     * Set shortContent
     *
     * @param string $shortContent
     *
     * @return Article
     */
    public function setShortContent($shortContent)
    {
        $this->shortContent = $shortContent;

        return $this;
    }

    /**
     * Get shortContent
     *
     * @return string
     */
    public function getShortContent()
    {
        return $this->shortContent;
    }

 

    /**
     * Add hobby
     *
     * @param \AppBundle\Entity\Hobby $hobby
     *
     * @return Article
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Article
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Article
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
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

    
    
    public function getOwner()
    {
        return $this->getAuthor();
    }
    
    public function getGroups()
    {
        return $this->getHobbies();
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Article
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return Article
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set isVisible
     *
     * @param boolean $isVisible
     *
     * @return Article
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    /**
     * Get isVisible
     *
     * @return boolean
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Set author
     *
     * @param \AppBundle\Entity\User $author
     *
     * @return Article
     */
    public function setAuthor(\AppBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \AppBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set editor
     *
     * @param \AppBundle\Entity\User $editor
     *
     * @return Article
     */
    public function setEditor(\AppBundle\Entity\User $editor = null)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return \AppBundle\Entity\User
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Add picture
     *
     * @param \AppBundle\Entity\Picture $picture
     *
     * @return Article
     */
    public function addPicture(\AppBundle\Entity\Picture $picture)
    {
        $this->pictures[] = $picture;

        return $this;
    }

    /**
     * Remove picture
     *
     * @param \AppBundle\Entity\Picture $picture
     */
    public function removePicture(\AppBundle\Entity\Picture $picture)
    {
        $this->pictures->removeElement($picture);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPictures()
    {
        return $this->pictures;
    }
}
