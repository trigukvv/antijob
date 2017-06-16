<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="pictures")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PictureRepository")
 */
class Picture
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
     * @ORM\Column(name="content", type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="sequential_number", type="integer")
     */
    private $sequentialNumber;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="pictures")
     * @ORM\JoinColumn(name="articles_id", referencedColumnName="id")
     */
    private $article;


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
     * Set content
     *
     * @param string $content
     *
     * @return Picture
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set sequentialNumber
     *
     * @param integer $sequentialNumber
     *
     * @return Picture
     */
    public function setSequentialNumber($sequentialNumber)
    {
        $this->sequentialNumber = $sequentialNumber;

        return $this;
    }

    /**
     * Get sequentialNumber
     *
     * @return integer
     */
    public function getSequentialNumber()
    {
        return $this->sequentialNumber;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Picture
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
