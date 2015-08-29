<?php
// src/PUF/PlatformBundle/Entity/Composer.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composer
 *
 * @ORM\Table(name="Composer")
 * @ORM\Entity
 */
class Composer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposer;

    /**
     * @var Musicien
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Musicien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     * })
     */
    private $musicien;

    /**
     * @var Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     * })
     */
    private $oeuvre;


    /**
     * Get codeComposer
     *
     * @return integer
     */
    public function getCodeComposer()
    {
        return $this->codeComposer;
    }

    /**
     * Set musicien
     *
     * @param Musicien $musicien
     *
     * @return Composer
     */
    public function setMusicien($musicien)
    {
        $this->musicien = $musicien;

        return $this;
    }

    /**
     * Get musicien
     *
     * @return Musicien
     */
    public function getMusicien()
    {
        return $this->musicien;
    }

    /**
     * Set oeuvre
     *
     * @param Oeuvre $oeuvre
     *
     * @return Composer
     */
    public function setOeuvre($oeuvre)
    {
        $this->oeuvre = $oeuvre;

        return $this;
    }

    /**
     * Get oeuvre
     *
     * @return Oeuvre
     */
    public function getOeuvre()
    {
        return $this->oeuvre;
    }
}
