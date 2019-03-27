<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// src/Acme/SoapBundle/Services/HelloService.php
namespace Spine\UserBundle\Services;

class HelloService
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function hello($name)
    {

        $message = \Swift_Message::newInstance()
                                ->setTo('jamel.arya@gmail.com')
                                ->setSubject('Hello Service')
                                ->setBody($name . ' dit bonjour !');

        $this->mailer->send($message);


        return 'Bonjour, '.$name;
    }
}
