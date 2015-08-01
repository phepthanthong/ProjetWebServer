<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musicien
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Musicien
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeMusicien;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Musicien", type="string", length=100)
     */
    private $nomMusicien;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Musicien", type="string", length=100)
     */
    private $prenomMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee_Naissance", type="integer")
     */
    private $anneeNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee_Mort", type="integer")
     */
    private $anneeMort;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     * })
     */
    private $codePays;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Genre", referencedColumnName="Code_Genre")
     * })
     */
    private $codeGenre;

    /**
     * @var \Instrument
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Instrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Instrument", referencedColumnName="Code_Instrument")
     * })
     */
    private $codeInstrument;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $photo;


    /**
     * Get id
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
     * Set codePays
     *
     * @param integer $codePays
     * @return Musicien
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePays
     *
     * @return integer 
     */
    public function getCodePays()
    {
        return $this->codePays;
    }

    /**
     * Set codeGenre
     *
     * @param integer $codeGenre
     * @return Musicien
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
     * Set codeInstrument
     *
     * @param integer $codeInstrument
     * @return Musicien
     */
    public function setCodeInstrument($codeInstrument)
    {
        $this->codeInstrument = $codeInstrument;

        return $this;
    }

    /**
     * Get codeInstrument
     *
     * @return integer 
     */
    public function getCodeInstrument()
    {
        return $this->codeInstrument;
    }

    /**
     * Set photo
     *
     * @param string $photo
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
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
