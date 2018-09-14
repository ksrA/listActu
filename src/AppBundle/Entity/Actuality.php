<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Model\ActualityModel;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActuRepository")
 * @ORM\Table(name="actuality")
 */
class Actuality extends ActualityModel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $author;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="actuality")
     */
    protected $comments;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateActuality;

    /**
     * @ORM\Column(type="integer")
     */
    protected $numberComment;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->dateActuality = new \DateTime(); 
        $this->numberComment = 0;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAuthor($author)
    {
       $this->author = $author;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function getDateActuality()
    {
        return $this->dateActuality;
    }

    public function getNumberComment()
    {
        return $this->numberComment;
    }

    public function commentAdded()
    {
        $this->numberComment = $this->numberComment + 1;
    }
}