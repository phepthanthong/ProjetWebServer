<?php

namespace PUF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PUF\PlatformBundle\Entity\Pays;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PUFPlatformBundle:Default:index.html.twig', array());
    }

    public function showcatalogueAction()
    {
        return $this->render('PUFPlatformBundle:Default:catalogue.html.twig', array());
    }
    
    public function createAction()
    {
    	$product = new Pays();
    	$product->setNomPays('PaysDeMerveille');
    	//$product->setPrenomAbonne('doan');
    	//$product->setLogin('ngoclong');
        //$product->setPassword('123456');

    	$em = $this->getDoctrine()->getManager();

    	$em->persist($product);
    	$em->flush();

    	return new Response('Create product id '.$product->getCodePays());

    }

    public function chercherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Pays p");

        $listePays = $req->getResult();
        //foreach ($listePays as $product){
        //    echo $product->getCodePays().' '.$product->getNomPays();
        //}
        return $this->render('PUFPlatformBundle:Default:chercher.html.twig', array('query'=>$listePays));
    }

    public function showAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->findOneByIdJoinedToCategory($id);

        $category = $product->getCategory();

        // ...
    }
}
