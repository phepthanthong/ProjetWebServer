<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Enregistrement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeMorceau;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composition", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Composition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     * })
     */
    private $codeComposition;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_de_Fichier", type="string", length=100)
     */
    private $nomDeFichier;

    /**
     * @var integer
     *
     * @ORM\Column(name="Duree", type="integer")
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="Duree_Seconds", type="integer")
     */
    private $dureeSeconds;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Extrait", type="string", length=255)
     */
    private $extrait;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeMorceau()
    {
        return $this->codeMorceau;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Enregistrement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set codeComposition
     *
     * @param integer $codeComposition
     * @return Enregistrement
     */
    public function setCodeComposition($codeComposition)
    {
        $this->codeComposition = $codeComposition;

        return $this;
    }

    /**
     * Get codeComposition
     *
     * @return integer 
     */
    public function getCodeComposition()
    {
        return $this->codeComposition;
    }

    /**
     * Set nomDeFichier
     *
     * @param string $nomDeFichier
     * @return Enregistrement
     */
    public function setNomDeFichier($nomDeFichier)
    {
        $this->nomDeFichier = $nomDeFichier;

        return $this;
    }

    /**
     * Get nomDeFichier
     *
     * @return string 
     */
    public function getNomDeFichier()
    {
        return $this->nomDeFichier;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Enregistrement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set dureeSeconds
     *
     * @param integer $dureeSeconds
     * @return Enregistrement
     */
    public function setDureeSeconds($dureeSeconds)
    {
        $this->dureeSeconds = $dureeSeconds;

        return $this;
    }

    /**
     * Get dureeSeconds
     *
     * @return integer 
     */
    public function getDureeSeconds()
    {
        return $this->dureeSeconds;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Enregistrement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set extrait
     *
     * @param string $extrait
     * @return Enregistrement
     */
    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return string 
     */
    public function getExtrait()
    {
        return $this->extrait;
    }
}
