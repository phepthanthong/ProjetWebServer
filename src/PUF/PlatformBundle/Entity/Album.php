<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Album", type="string", length=100)
     */
    private $titreAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee_Album", type="integer")
     */
    private $anneeAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Genre", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Genre", referencedColumnName="Code_Genre")
     * })
     */
    private $codeGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Editeur", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Editeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Editeur", referencedColumnName="Code_Editeur")
     * })
     */
    private $codeEditeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Pochette", type="string", length=255)
     */
    private $pochette;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeAlbum()
    {
        return $this->codeAlbum;
    }

    /**
     * Set titreAlbum
     *
     * @param string $titreAlbum
     * @return Album
     */
    public function setTitreAlbum($titreAlbum)
    {
        $this->titreAlbum = $titreAlbum;

        return $this;
    }

    /**
     * Get titreAlbum
     *
     * @return string 
     */
    public function getTitreAlbum()
    {
        return $this->titreAlbum;
    }

    /**
     * Set anneeAlbum
     *
     * @param integer $anneeAlbum
     * @return Album
     */
    public function setAnneeAlbum($anneeAlbum)
    {
        $this->anneeAlbum = $anneeAlbum;

        return $this;
    }

    /**
     * Get anneeAlbum
     *
     * @return integer 
     */
    public function getAnneeAlbum()
    {
        return $this->anneeAlbum;
    }

    /**
     * Set codeGenre
     *
     * @param integer $codeGenre
     * @return Album
     */
    public function setCodeGenre($codeGenre)
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    /**
     * Get codeGenre
     *
     * @return integer 
     */
    public function getCodeGenre()
    {
        return $this->codeGenre;
    }

    /**
     * Set codeEditeur
     *
     * @param integer $codeEditeur
     * @return Album
     */
    public function setCodeEditeur($codeEditeur)
    {
        $this->codeEditeur = $codeEditeur;

        return $this;
    }

    /**
     * Get codeEditeur
     *
     * @return integer 
     */
    public function getCodeEditeur()
    {
        return $this->codeEditeur;
    }

    /**
     * Set pochette
     *
     * @param string $pochette
     * @return Album
     */
    public function setPochette($pochette)
    {
        $this->pochette = $pochette;

        return $this;
    }

    /**
     * Get pochette
     *
     * @return string 
     */
    public function getPochette()
    {
        return $this->pochette;
    }
}
