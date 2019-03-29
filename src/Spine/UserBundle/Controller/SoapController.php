<?php

namespace Spine\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



use Symfony\Component\Routing\Annotation\Route;

class SoapController extends Controller {

    

    /**
     * Function to retrieve current applications base URI for WSDL
     */
    private function getBaseUri() {    
     // get the router context to retrieve URI information
        $context = $this->get('router')->getContext();
        // return scheme, host and base URL
        return $context->getScheme() . '://' . $context->getHost() . $context->getBaseUrl();
    }
    
    /**
     * @Route("/soap")
     * 
     */

    public function indexSoapAction() {
  
        // init data format
        //$this->getRequest()->attributes->set('_format', 'xml');
        // retrieve base URI for WSDL file location
        $base_uri = $this->getBaseUri();
 
        
        
        $soapServer = new SoapServer($base_uri.'/web/hello.wsdl');
    
        $soapServer->setObject($this->get('hello_service'));

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $soapServer->handle();
        $response->setContent(ob_get_clean());

        return $response;
        
        
        
        
        
    }

}
