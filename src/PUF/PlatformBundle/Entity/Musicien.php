<?php
// src/PUF/PlatformBundle/Entity/Musicien.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musicien
 *
 * @ORM\Table(name="Musicien")
 * @ORM\Entity
 */
class Musicien
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Musicien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeMusicien;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Musicien", type="string", length=200, nullable=false)
     */
    private $nomMusicien;

    /**
     * @var string
     *
     * @ORM\Column(name="Prénom_Musicien", type="string", length=50, nullable=true)
     */
    private $prenomMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Année_Naissance", type="integer", nullable=true)
     */
    private $anneeNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="Année_Mort", type="integer", nullable=true)
     */
    private $anneeMort;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     * })
     */
    private $pays;


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
     * @var \Instrument
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Instrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Instrument", referencedColumnName="Code_Instrument")
     * })
     */
    private $instrument;
	
	/**
     * @var binary
     *
     * @ORM\Column(name="Photo", type="blob", nullable=true)
     */
    private $photo;
	
    /**
     * Get codeMusicien
     *
     * @return integer
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }

    /**
     * Set nomMusicien
     *
     * @param string $nomMusicien
     *
     * @return Musicien
     */
    public function setNomMusicien($nomMusicien)
    {
        $this->nomMusicien = $nomMusicien;

        return $this;
    }

    /**
     * Get nomMusicien
     *
     * @return string
     */
    public function getNomMusicien()
    {
        return $this->nomMusicien;
    }

    /**
     * Set prenomMusicien
     *
     * @param string $prenomMusicien
     *
     * @return Musicien
     */
    public function setPrenomMusicien($prenomMusicien)
    {
        $this->prenomMusicien = $prenomMusicien;

        return $this;
    }

    /**
     * Get prenomMusicien
     *
     * @return string
     */
    public function getPrenomMusicien()
    {
        return $this->prenomMusicien;
    }

    /**
     * Set anneeNaissance
     *
     * @param integer $anneeNaissance
     *
     * @return Musicien
     */
    public function setAnneeNaissance($anneeNaissance)
    {
        $this->anneeNaissance = $anneeNaissance;

        return $this;
    }

    /**
     * Get anneeNaissance
     *
     * @return integer
     */
    public function getAnneeNaissance()
    {
        return $this->anneeNaissance;
    }

    /**
     * Set anneeMort
     *
     * @param integer $anneeMort
     *
     * @return Musicien
     */
    public function setAnneeMort($anneeMort)
    {
        $this->anneeMort = $anneeMort;

        return $this;
    }

    /**
     * Get anneeMort
     *
     * @return integer
     */
    public function getAnneeMort()
    {
        return $this->anneeMort;
    }

    /**
     * Set pays
     *
     * @param \Pays $pays
     *
     * @return Musicien
     */
    public function setPays(\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
	
	/**
     * Set genre
     *
     * @param \Genre $genre
     *
     * @return Musicien
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
     * Set instrument
     *
     * @param \Instrument $instrument
     *
     * @return Musicien
     */
    public function setInstrument(\Instrument $instrument = null)
    {
        $this->instrument = $instrument;

        return $this;
    }

    /**
     * Get instrument
     *
     * @return \Instrument
     */
    public function getInstrument()
    {
        return $this->instrument;
    }
	
	/**
     * Set photo
     *
     * @param binary $photo
     *
     * @return Musicien
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return binary
     */
    public function getPhoto()
    {
        return $this->photo;
    }
	
}
