<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Model\CommentInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment implements CommentInterface
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
    protected $pseudo;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Actuality", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $actuality;


    public function setPseudo($pseudo)
    {
        $this->formatPseudo($pseudo);
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function setActuality($actuality)
    {
        $this->actuality = $actuality;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getActuality()
    {
        return $this->actuality;
    }

    public function formatPseudo($pseudo)
    {
        $this->pseudo = strtoupper($pseudo);
    }

}