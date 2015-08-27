<?php
// src/PUF/PlatformBundle/Entity/Emprunter.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunter
 *
 * @ORM\Table(name="Emprunter")
 * @ORM\Entity
 */
class Emprunter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Emprunt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEmprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Emprunt", type="date", nullable=false)
     */
    private $dateEmprunt;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Album", referencedColumnName="Code_Album")
     * })
     */
    private $album;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Abonné", referencedColumnName="Code_Abonné")
     * })
     */
    private $abonne;


    /**
     * Get codeEmprunt
     *
     * @return integer
     */
    public function getCodeEmprunt()
    {
        return $this->codeEmprunt;
    }

    /**
     * Set dateEmprunt
     *
     * @param \DateTime $dateEmprunt
     *
     * @return Emprunter
     */
    public function setDateEmprunt($dateEmprunt)
    {
        $this->dateEmprunt = $dateEmprunt;

        return $this;
    }

    /**
     * Get dateEmprunt
     *
     * @return \DateTime
     */
    public function getDateEmprunt()
    {
        return $this->dateEmprunt;
    }

    /**
     * Set album
     *
     * @param \Album $album
     *
     * @return Emprunter
     */
    public function setAlbum(\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set abonne
     *
     * @param \Abonne $abonne
     *
     * @return Emprunter
     */
    public function setAbonne(\Abonne $abonne = null)
    {
        $this->abonne = $abonne;

        return $this;
    }

    /**
     * Get abonne
     *
     * @return \Abonne
     */
    public function getAbonne()
    {
        return $this->abonne;
    }
}
