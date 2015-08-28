<?php

namespace PUF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PUF\PlatformBundle\Entity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $req)
    {
        // Get data from Login Modal
        //session_start();

        $post = Request::createFromGlobals();
        $username = $post->request->get("username");
        $password = $post->request->get("password");

        $em = $this->getDoctrine()->getManager();
        $res = $em->createQuery("SELECT a FROM PUFPlatformBundle:Abonne a 
                                 WHERE a.password='$password' 
                                 AND a.login='$username'")->getResult();
        if ($res != null) {
            
            $session = $req->getSession();
            $session->set('username', $username);

            $url = $this->generateUrl("detail_album");            

            return $this->redirect($url);

        } else {
            $this->get('session')->getFlashBag()->add('error', 'error ....!');
        }
        return $this->render('PUFPlatformBundle:Default:index.html.twig', array());
    }

    public function showcatalogueAction()
    {
        return $this->render('PUFPlatformBundle:Default:catalogue.html.twig', array());
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

    public function signupSuccessAction()
    {
        $post = Request::createFromGlobals();
        if ($post->request->has('submit')) {
            $username = $post->request->get("InputLogin");
            $password = $post->request->get("InputPassword");
            $nom = $post->request->get("InputNom");
            $prenom = $post->request->get("InputPrenom");
            $newuser = new Abonne();
            $newuser->setNomAbonne($nom);
            $newuser->setPrenomAbonne($prenom);
            $newuser->setLogin($username);
            $newuser->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($newuser);
            $em->flush();
            return new Response('Bienvenue '.$newuser->getNomAbonne() .' sur notre page !' );
        } else {
            return new Response('Error' );
        }
        
        /*return $this->render('PUFPlatformBundle:Default:signup_success.html.twig');*/
        /* eturn new Response('Bienvenue '.$product->getNomAbonne() .' sur notre page !' );*/
    }
    
    public function chercherAlbumAction($albumId, Request $rq)
    {   
        $session = $rq->getSession();
        $username = $session->get('username');

        $post = Request::createFromGlobals();        
        $val = $post->request->get('chercher_value');

        $session = $this->getRequest()->getSession();
        
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
            $res = $em->createQuery("SELECT en.codeEnregistrement, en.nomDeFichier, en.duree, en.dureeSeconde, en.prix, en.extrait 
                FROM PUFPlatformBundle:Album a, PUFPlatformBundle:Genre g, PUFPlatformBundle:Editeur e,
                PUFPlatformBundle:Disque d, PUFPlatformBundle:CompositionDisque c, PUFPlatformBundle:Enregistrement en 
                WHERE a.genre = g.codeGenre AND a.editeur = e.codeEditeur AND a.codeAlbum = d.album AND
                d.codeDisque = c.disque AND c.enregistrement = en.codeEnregistrement
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

            //------------------------------------

            // $buy = $post->request->get('codeBuy');
            // $sup = $em->createQuery("SELECT a.codeAbonne FROM PUFPlatformBundle:Abonne a
            //     WHERE a.prenomAbonne = '$username'");
            // $col2 = $sup->getResult();
            
            // $val_col2 = array_values(array_values($col2)[0])[0];
            // //$val_col2 = array_shift(array_slice($col2, 0, 1));
            // var_dump($val_col2);
            // var_dump($buy);
            // $res3 = $em->createQuery("INSERT INTO PUFPlatformBundle:Achat (enregistrement, abonne) 
            //     values ('$buy', 2)");
            // $liste3 = $res3->getResult();

            return $this->render('PUFPlatformBundle:Default:detailAlbum.html.twig', array('query'=>$liste, 'query2'=>$liste2/*, 'query3'=>$liste3*/));

        }
    }

    public function extraitAction($extraitId)
    {
        $em = $this->getDoctrine()->getManager();
        $res = $em->createQuery("SELECT e.extrait FROM PUFPlatformBundle:Enregistrement e 
            WHERE e.codeEnregistrement = ".$extraitId)->getResult();
        $response = new Response(stream_get_contents($res[0]['extrait']));
        $response->headers->set('Content-Type','audio/mpeg');
        //$response->headers->set('Content-Length', strlen(stream_get_contents($res[0]['extrait'])));
        // $response->headers->set('Content-Length:'.strlen(stream_get_contents($res[0]['extrait'])));

        // $response->headers->set('Content-Disposition: filename=morceau'.$extraitId);
        // $response->headers->set('X-pad: avoid browser bug');
        // $response->headers->set('Cache-Control: no-cache');

        return $response;

    }

    public function chercherMusicienAction()
    {
        $post = Request::createFromGlobals();
        $val = $post->request->get('chercher_value');

        $em = $this->getDoctrine()->getManager();
        $res = $em->createQuery("SELECT m.nomMusicien, m.prenomMusicien, m.anneeNaissance, m.anneeMort, p.nomPays, 
        g.libelleAbrege, i.nomInstrument, i.image, m.photo FROM PUFPlatformBundle:Musicien m, PUFPlatformBundle:Pays p, PUFPlatformBundle:Genre g, PUFPlatformBundle:Instrument i
        WHERE m.nomMusicien LIKE '%$val%' OR
              m.prenomMusicien LIKE '%$val%' OR
              m.anneeNaissance LIKE '%$val%' OR
              m.anneeMort LIKE '%$val%' OR
              p.nomPays LIKE '%$val%' OR
              g.libelleAbrege LIKE '%$val%' OR
              i.nomInstrument LIKE '%$val%'")->getResult();

        $liste = array();
        foreach ($res as $m) {            
            $m['photo'] = base64_encode(stream_get_contents($m['photo']));
            $m['image'] = base64_encode(stream_get_contents($m['image']));
            $liste[] = $m;
        }

        return $this->render('PUFPlatformBundle:Default:chercherMusicien.html.twig', array('query'=>$liste));
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

    public function chercherOeuvreAction()
    {
        $post = Request::createFromGlobals();
        $val = $post->request->get('chercher_value');

        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("SELECT o.titreOeuvre, o.sousTitre, o.tonalite, o.annee, o.opus,
        o.numeroOpus, t.libelleType, t.description FROM PUFPlatformBundle:Oeuvre o, PUFPlatformBundle:TypeMorceaux t
        WHERE o.titreOeuvre LIKE '%$val' OR
              o.sousTitre LIKE '%$val%' OR
              o.tonalite LIKE '%$val%' OR
              o.annee LIKE '%$val%' OR
              o.opus LIKE '%$val%' OR
              o.numeroOpus LIKE '%$val%' OR
              t.libelleType LIKE '%$val%' OR
              t.description LIKE '%$val%'");

        $liste = $req->getResult();
        
        return $this->render('PUFPlatformBundle:Default:chercherOeuvre.html.twig', array('query'=>$liste));
    }

    public function panierAction(Request $req)
    {
        $session = $req->getSession();
        $username = $session->get('username');
        var_dump($username);
        $em = $this->getDoctrine()->getManager();
        $res = $em->createQuery("SELECT a.codeAbonne, a.nomAbonne, a.prenomAbonne FROM PUFPlatformBundle:Abonne a
           WHERE a.prenomAbonne = '$username'");

    

        $liste = $res->getResult();

        // $res2 = $em->createQuery("INSERT INTO PUFPlatformBundle:Achat (enregistrement, abonne) values ('$enregistrement', '1')");
        // // $req2 = $em->createQuery("SELECT en.nomDeFichier, en.duree, en.dureeSeconde, en.prix 
        // //     FROM PUFPlatformBundle:Enregistrement WHERE en.codeEnregistrement = '$enregistrement'");

        // $liste2 = $req2->getResult();

        return $this->render('PUFPlatformBundle:Default:panier.html.twig', array('query'=>$liste));
    }


}
