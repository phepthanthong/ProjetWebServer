<?php
// src/PUF/PlatformBundle/Entity/Album.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="Album")
 * @ORM\Entity
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Album", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Album", type="string", length=400, nullable=false)
     */
    private $titreAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Année_Album", type="integer", nullable=true)
     */
    private $anneeAlbum;

    /**
     * @var binary
     *
     * @ORM\Column(name="Pochette", type="blob", nullable=true)
     */
    private $pochette;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Genre", referencedColumnName="Code_Genre")
     * })
     */
    private $genre;

    /**
     * @var \Editeur
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Editeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Editeur", referencedColumnName="Code_Editeur")
     * })
     */
    private $editeur;


    /**
     * Get codeAlbum
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
     *
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
     *
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
     * Set pochette
     *
     * @param binary $pochette
     *
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
     * @return binary
     */
    public function getPochette()
    {
        return $this->pochette;
    }

    /**
     * Set genre
     *
     * @param \Genre $genre
     *
     * @return Album
     */
    public function setGenre(\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set editeur
     *
     * @param \Editeur $editeur
     *
     * @return Album
     */
    public function setEditeur(\Editeur $editeur = null)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return \Editeur
     */
    public function getEditeur()
    {
        return $this->editeur;
    }
}
