<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actuality;
use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ActualityController extends Controller
{
    /**
     * @Route("/new-actu", name="new-actu")
     */
    public function newAction(Request $request)
    {

        // S'il n'a pas le rôle admin - sécurité
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Accès interdit !');

        // Création d'un nouvel objet de type Actuality et génération du formulaire

        $actu = new Actuality();

        $form = $this->createFormBuilder($actu)
            ->add('title', TextType::class, [
                'label' => 'Title',
            ])
            ->add('author', TextType::class,[
                'label' => 'Author',
            ])
            ->add('content', TextareaType::class,[
                'label' => 'Content',
            ])
            ->add('create', SubmitType::class, [
                'label' => 'Save',
            ])
            ->getForm();

        $form->handleRequest($request);

        // Lorsque le formulaire est soumis et valide, enregistrement de l'actualité en bdd et redirection

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
        
            return $this->redirectToRoute('homepage');
        }

        return $this->render('actu/new-actu.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/actu/{id}", name="display-actu")
     */
    public function displayActu($id, Request $request)
    {
        // Affichage de l'actualité grâce à son id
        // Si le formulaire de commentaire a été complété, actualité associé et enregistrement en bdd 

        $form = $this->getRequest()->request->all();
        
        if(!empty($form))
        {
            $comment = new Comment();
            $comment->setPseudo($form['pseudo']);
            $comment->setComment($form['comment']);

            $actuality = $this->getDoctrine()
            ->getRepository(Actuality::class)
            ->find($id);
    
            $comment->setActuality($actuality);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
        }

        $actu = $this->getDoctrine()
        ->getRepository(Actuality::class)
        ->find($id);

        if($actu == null){
            throw $this->createNotFoundException('The actuality does not exist');
        } 

        return $this->render('actu/actu.html.twig', array(
            'actu' => $actu,
        ));
    }
}