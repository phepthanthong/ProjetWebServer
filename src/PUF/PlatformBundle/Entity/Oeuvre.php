<?php
// src/PUF/PlatformBundle/Entity/Oeuvre.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="Oeuvre")
 * @ORM\Entity
 */
class Oeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Oeuvre", type="string", length=0, nullable=false)
     */
    private $titreOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="Sous_Titre", type="string", length=0, nullable=true)
     */
    private $sousTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="Tonalité", type="string", length=20, nullable=true)
     */
    private $tonalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="Année", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Opus", type="string", length=20, nullable=true)
     */
    private $opus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numéro_Opus", type="integer", nullable=true)
     */
    private $numeroOpus = '0';

    /**
     * @var TypeMorceaux
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\TypeMorceaux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Type", referencedColumnName="Code_Type")
     * })
     */
    private $type;


    /**
     * Get codeOeuvre
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
     *
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
     *
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
     * Set tonalite
     *
     * @param string $tonalite
     *
     * @return Oeuvre
     */
    public function setTonalite($tonalite)
    {
        $this->tonalite = $tonalite;

        return $this;
    }

    /**
     * Get tonalite
     *
     * @return string
     */
    public function getTonalite()
    {
        return $this->tonalite;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
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
     * Set opus
     *
     * @param string $opus
     *
     * @return Oeuvre
     */
    public function setOpus($opus)
    {
        $this->opus = $opus;

        return $this;
    }

    /**
     * Get opus
     *
     * @return string
     */
    public function getOpus()
    {
        return $this->opus;
    }

    /**
     * Set numeroOpus
     *
     * @param integer $numeroOpus
     *
     * @return Oeuvre
     */
    public function setNumeroOpus($numeroOpus)
    {
        $this->numeroOpus = $numeroOpus;

        return $this;
    }

    /**
     * Get numeroOpus
     *
     * @return integer
     */
    public function getNumeroOpus()
    {
        return $this->numeroOpus;
    }

    /**
     * Set type
     *
     * @param TypeMorceaux $type
     *
     * @return Oeuvre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return TypeMorceaux
     */
    public function getType()
    {
        return $this->type;
    }
}
