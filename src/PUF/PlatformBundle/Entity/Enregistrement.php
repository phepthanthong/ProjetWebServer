<?php
// src/PUF/PlatformBundle/Entity/Enregistrement.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrement
 *
 * @ORM\Table(name="Enregistrement")
 * @ORM\Entity
 */
class Enregistrement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Enregistrement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=0, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_de_Fichier", type="string", length=0, nullable=false)
     */
    private $nomDeFichier;

    /**
     * @var string
     *
     * @ORM\Column(name="Durée", type="string", length=10, nullable=true)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="Durée_Seconde", type="integer", nullable=true)
     */
    private $dureeSeconde;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var binary
     *
     * @ORM\Column(name="Extrait", type="blob", nullable=true)
     */
    private $extrait;

    /**
     * @var \Composition
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Composition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     * })
     */
    private $composition;


    /**
     * Get codeEnregistrement
     *
     * @return integer
     */
    public function getCodeEnregistrement()
    {
        return $this->codeEnregistrement;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
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
     * Set nomDeFichier
     *
     * @param string $nomDeFichier
     *
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
     * @param string $duree
     *
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
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set dureeSeconde
     *
     * @param integer $dureeSeconde
     *
     * @return Enregistrement
     */
    public function setDureeSeconde($dureeSeconde)
    {
        $this->dureeSeconde = $dureeSeconde;

        return $this;
    }

    /**
     * Get dureeSeconde
     *
     * @return integer
     */
    public function getDureeSeconde()
    {
        return $this->dureeSeconde;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
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
     * @param binary $extrait
     *
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
     * @return binary
     */
    public function getExtrait()
    {
        return $this->extrait;
    }

    /**
     * Set composition
     *
     * @param \Composition $composition
     *
     * @return Enregistrement
     */
    public function setComposition(\Composition $composition = null)
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * Get composition
     *
     * @return \Composition
     */
    public function getComposition()
    {
        return $this->composition;
    }
}
