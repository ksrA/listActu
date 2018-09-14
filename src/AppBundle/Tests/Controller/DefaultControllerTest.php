<?php

namespace AppBundle\Tests\Controller;

use AppBundle\Entity\Actuality;
use AppBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class DefaultControllerTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();
        $this->entityManager = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
    }

    /**
     * Check if numberComment is correct when comments are added to one actuality
     */
    public function testNumberCommentValue()
    {
        $actu = new Actuality();

        $actu->setAuthor('Testeur');
        $actu->setTitle('Titre de l\'actualité');
        $actu->setContent('Contenu de l\'actualité');

        $this->entityManager->persist($actu);
        $this->entityManager->flush();
        
        $comment = new Comment();
        $comment->setPseudo('Pseudo1');
        $comment->setComment('Un commentaire');
        $comment->setActuality($actu);
        $this->entityManager->persist($comment);

        $comment = new Comment();
        $comment->setPseudo('Pseudo2');
        $comment->setComment('Deuxième commentaire');
        $comment->setActuality($actu);
        $this->entityManager->persist($comment);

        $comment = new Comment();
        $comment->setPseudo('Pseudo3');
        $comment->setComment('Trosième commentaire');
        $comment->setActuality($actu);

        $this->entityManager->persist($comment);
        $this->entityManager->flush();

        $this->assertEquals(3, $actu->getNumberComment());
    }

    /**
     * Test if class possess a wanted attribute
     */
    public function testClassAttribute()
    {
        $this->assertClassHasAttribute('dateActuality', Actuality::class);
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->entityManager->close();
        $this->entityManager = null; // avoid memory leaks
    }
}
