<?php

namespace PUF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PUFPlatformBundle:Default:index.html.twig', array());
    }

    public function helloAction()
    {
    	return $this->render('PUFPlatformBundle:Default:hello.html.twig', array());
    }
}
