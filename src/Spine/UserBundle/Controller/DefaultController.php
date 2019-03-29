<?php

namespace Spine\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

    /**
     * @Route("/page1")
     */
    public function indexAction() {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    
}
