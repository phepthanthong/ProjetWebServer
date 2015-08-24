<?php

namespace PUF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PUF\PlatformBundle\Entity\Pays;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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

    public function form1Action()
    {

        $post = Request::createFromGlobals();

        if ($post->request->has('submit')) {
            $cat = $post->request->get('cat');
            $url = $this->generateUrl('puf_musik_cat', array('cat' => $cat));
            return $this->redirect($url);
        } else {
            $message = 'Not submitted yet';
            return $this->render('PUFMusikBundle:Musik:index.html.twig', array('message' => $message));
        }
    }

    public function chercherAlbumAction($albumId)
    {   
        $post = Request::createFromGlobals();
        $val = $post->request->get('chercher_value');
        if( $albumId == 0) {


            $em = $this->getDoctrine()->getManager();
            $res = $em->createQuery("SELECT a.codeAlbum, a.titreAlbum, a.anneeAlbum, g.libelleAbrege, e.nomEditeur, a.pochette 
                FROM PUFPlatformBundle:Album a, PUFPlatformBundle:Genre g, PUFPlatformBundle:Editeur e 
                WHERE a.genre = g.codeGenre AND a.editeur = e.codeEditeur
                AND (a.titreAlbum LIKE '%$val%' OR 
                     a.anneeAlbum LIKE '%$val%' OR
                     g.libelleAbrege LIKE '%$val%' OR
                     e.nomEditeur LIKE '%$val%')")->getResult();
            
            $liste = array();
            foreach ($res as $m) {
                $m['pochette'] = base64_encode(stream_get_contents($m['pochette']));
                $liste[] = $m;
            }
            return $this->render('PUFPlatformBundle:Default:chercherAlbum.html.twig', array('query'=>$liste));
        }
        else {
            $em = $this->getDoctrine()->getManager();
            $res = $em->createQuery("SELECT en.codeMorceau, en.nomDeFichier, en.duree, en.dureeSeconde, en.prix, en.extrait 
                FROM PUFPlatformBundle:Album a, PUFPlatformBundle:Genre g, PUFPlatformBundle:Editeur e,
                PUFPlatformBundle:Disque d, PUFPlatformBundle:CompositionDisque c, PUFPlatformBundle:Enregistrement en 
                WHERE a.genre = g.codeGenre AND a.editeur = e.codeEditeur AND a.codeAlbum = d.album AND
                d.codeDisque = c.disque AND c.morceau = en.codeMorceau
                AND a.codeAlbum LIKE '$albumId'");//->getResult();

            $liste = $res->getResult();

            //------------------------------------

            $res2 = $em->createQuery("SELECT a.codeAlbum, a.titreAlbum, a.anneeAlbum, g.libelleAbrege, e.nomEditeur, a.pochette 
                FROM PUFPlatformBundle:Album a, PUFPlatformBundle:Genre g, PUFPlatformBundle:Editeur e 
                WHERE a.genre = g.codeGenre AND a.editeur = e.codeEditeur
                AND a.codeAlbum LIKE '$albumId'")->getResult();
                
            $liste2 = array();
            foreach ($res2 as $m) {
                $m['pochette'] = base64_encode(stream_get_contents($m['pochette']));
                $liste2[] = $m;
            }

            return $this->render('PUFPlatformBundle:Default:detailAlbum.html.twig', array('query'=>$liste, 'query2'=>$liste2));

        }
    }

    public function extraitAction($code_morceau)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->createQuery("SELECT e.extrait FROM PUFPlatformBundle:Enregistrement e 
            WHERE e.codeMorceau = ".$code_morceau)->getResult();
        $response = new Response(stream_get_contents($res2[0]['extrait']));
        $response->headers->set('Content-Type','audio/mpeg');
        $response->headers->set('Content-Length:'.strlen(stream_get_contents($res2[0]['extrait'])));

        $response->headers->set('Content-Disposition: filename=morceau'.$code_morceau);
        $response->headers->set('X-pad: avoid browser bug');
        $response->headers->set('Cache-Control: no-cache');

        return $response;

    }

    public function chercherMusicienAction()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT m.nomMusicien, m.prenomMusicien, m.anneeNaissance, m.anneeMort, p.nomPays, 
        g.libelleAbrege, i.nomInstrument, i.image, m.photo FROM PUFPlatformBundle:Musicien m, PUFPlatformBundle:Pays p, PUFPlatformBundle:Genre g, PUFPlatformBundle:Instrument i
        WHERE ");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:musicien.html.twig', array('query'=>$liste));
    }

    public function chercherGenreAction()
    {
        $post = Request::createFromGlobals();
        $val = $post->request->get('chercher_value');

        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT g.libelleAbrege FROM PUFPlatformBundle:Genre g 
            WHERE g.libelleAbrege LIKE '%$val%'");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:chercherGenre.html.twig', array('query'=>$liste));
    }

    public function chercherInstrumentAction()
    {
        $post = Request::createFromGlobals();
        $val = $post->request->get('chercher_value');

        $em = $this->getDoctrine()->getManager();
        $res = $em->createQuery("SELECT i.nomInstrument, i.image FROM PUFPlatformBundle:Instrument i
            WHERE i.nomInstrument LIKE '%$val%'")->getResult();

        $liste = array();
        foreach ($res as $m) {
            $m['image'] = base64_encode(stream_get_contents($m['image']));
            $liste[] = $m;
        }

        return $this->render('PUFPlatformBundle:Default:chercherInstrument.html.twig', array('query'=>$liste));
    }

    public function chercherOeuvre()
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT o.titreOeuvre, o.sousTitre, o.tonalite, o.annee, o.opus,
        o.numeroOpus, t.libelleType, t.description FROM PUFPlatformBundle:Oeuvre o, PUFPlatformBundle:TypeMorceau t");

        $liste = $req->getResult();
        return $this->render('PUFPlatformBundle:Default:chercherOeuvre.html.twig', array('query'=>$liste));
    }

}
