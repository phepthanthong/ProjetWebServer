<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Oeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Oeuvre", type="string", length=100)
     */
    private $titreOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="Sous_Titre", type="string", length=100)
     */
    private $sousTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="Tonallite", type="string", length=50)
     */
    private $tonallite;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Type", type="integer")
     */
    private $codeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Type_Morceaux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Type", referencedColumnName="Code_Type")
     * })
     */
    private $annee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Oput", type="boolean")
     */
    private $oput;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero_Oput", type="integer")
     */
    private $numeroOput;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeOeuvre()
    {
        return $this->codeOeuvre;
    }

    /**
     * Set titreOeuvre
     *
     * @param string $titreOeuvre
     * @return Oeuvre
     */
    public function setTitreOeuvre($titreOeuvre)
    {
        $this->titreOeuvre = $titreOeuvre;

        return $this;
    }

    /**
     * Get titreOeuvre
     *
     * @return string 
     */
    public function getTitreOeuvre()
    {
        return $this->titreOeuvre;
    }

    /**
     * Set sousTitre
     *
     * @param string $sousTitre
     * @return Oeuvre
     */
    public function setSousTitre($sousTitre)
    {
        $this->sousTitre = $sousTitre;

        return $this;
    }

    /**
     * Get sousTitre
     *
     * @return string 
     */
    public function getSousTitre()
    {
        return $this->sousTitre;
    }

    /**
     * Set tonallite
     *
     * @param string $tonallite
     * @return Oeuvre
     */
    public function setTonallite($tonallite)
    {
        $this->tonallite = $tonallite;

        return $this;
    }

    /**
     * Get tonallite
     *
     * @return string 
     */
    public function getTonallite()
    {
        return $this->tonallite;
    }

    /**
     * Set codeType
     *
     * @param integer $codeType
     * @return Oeuvre
     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;

        return $this;
    }

    /**
     * Get codeType
     *
     * @return integer 
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Oeuvre
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set oput
     *
     * @param boolean $oput
     * @return Oeuvre
     */
    public function setOput($oput)
    {
        $this->oput = $oput;

        return $this;
    }

    /**
     * Get oput
     *
     * @return boolean 
     */
    public function getOput()
    {
        return $this->oput;
    }

    /**
     * Set numeroOput
     *
     * @param integer $numeroOput
     * @return Oeuvre
     */
    public function setNumeroOput($numeroOput)
    {
        $this->numeroOput = $numeroOput;

        return $this;
    }

    /**
     * Get numeroOput
     *
     * @return integer 
     */
    public function getNumeroOput()
    {
        return $this->numeroOput;
    }
}
