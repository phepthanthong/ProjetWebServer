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
        return $this->render('PUFPlatformBundle:Default:chercher.html.twig', array('query'=>$listePays));
    }

    public function chercherAlbumAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Album p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:album.html.twig', array('query'=>$liste));
    }

    public function chercherMusicienAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Musicien p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:musicien.html.twig', array('query'=>$liste));
    }

    public function chercherInterpreterAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Interpreter p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:interpreter.html.twig', array('query'=>$liste));
    }

    public function chercherGenreAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Genre p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:genre.html.twig', array('query'=>$liste));
    }

    public function chercherInstrumentAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Instrument p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:instrument.html.twig', array('query'=>$liste));
    }

    public function chercherComposition()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Composition p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:composition.html.twig', array('query'=>$liste));
    }

    public function chercherOeuvre()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT p FROM PUFPlatformBundle:Oeuvre p");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:oeuvre.html.twig', array('query'=>$liste));
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
