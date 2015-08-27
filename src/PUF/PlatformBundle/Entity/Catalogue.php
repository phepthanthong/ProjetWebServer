<?php
// src/PUF/MusikBundle/Entity/Catalogue.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="Catalogue")
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Catalogue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeCatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Catalogue", type="string", length=10, nullable=true)
     */
    private $nomCatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="Musicien", type="string", length=20, nullable=true)
     */
    private $musicien;

    /**
     * @var string
     *
     * @ORM\Column(name="Sens", type="string", length=50, nullable=true)
     */
    private $sens;


    /**
     * Get codeCatalogue
     *
     * @return integer
     */
    public function getCodeCatalogue()
    {
        return $this->codeCatalogue;
    }

    /**
     * Set nomCatalogue
     *
     * @param string $nomCatalogue
     *
     * @return Catalogue
     */
    public function setNomCatalogue($nomCatalogue)
    {
        $this->nomCatalogue = $nomCatalogue;

        return $this;
    }

    /**
     * Get nomCatalogue
     *
     * @return string
     */
    public function getNomCatalogue()
    {
        return $this->nomCatalogue;
    }

    /**
     * Set musicien
     *
     * @param string $musicien
     *
     * @return Catalogue
     */
    public function setMusicien($musicien)
    {
        $this->musicien = $musicien;

        return $this;
    }

    /**
     * Get musicien
     *
     * @return string
     */
    public function getMusicien()
    {
        return $this->musicien;
    }

    /**
     * Set sens
     *
     * @param string $sens
     *
     * @return Catalogue
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return string
     */
    public function getSens()
    {
        return $this->sens;
    }
}
