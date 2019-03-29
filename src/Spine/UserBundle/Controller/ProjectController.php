<?php

namespace Spine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use Spine\UserBundle\Entity\Contact;

class ProjectController extends FOSRestController {

    /**
     * @Rest\Get("/contact")
     */
    public function getContactsAction() {
        $restresult = $this->getDoctrine()->getRepository('UserBundle:Contact')->findAll();

        if ($restresult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        $view = $this->view($restresult, 200)->setFormat("json");
        return $this->handleView($view);
    }
    
    
     /**
     * @Rest\Get("/projects", name="project")
     */
    public function index()
    {
        $projects =  $this->getDoctrine()->getRepository('UserBundle:Project')->findAll();
        
//        $jsonContent = $this->serializeObject($projects);
//        return new Response($jsonContent, Response::HTTP_OK);
        $view = $this->view($projects, 200)->setFormat("json");
        return $this->handleView($view);
    }

}
