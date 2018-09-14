<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actuality;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {    
        // Récupération de toutes les actualités pour les afficher en home page
        
        $listActu = $this->getDoctrine()
        ->getRepository(Actuality::class)
        ->findAll();

        return $this->render('default/index.html.twig', array(
            'listActu' => $listActu,
        ));
    }
}
