<?php
// src/PUF/PlatformBundle/Entity/Direction.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direction
 *
 * @ORM\Table(name="Direction")
 * @ORM\Entity
 */
class Direction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Direction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDirection;

    /**
     * @var \Orchestres
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Orchestres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Orchestre", referencedColumnName="Code_Orchestre")
     * })
     */
    private $orchestre;

    /**
     * @var \Musicien
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Musicien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     * })
     */
    private $musicien;

    /**
     * @var \Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     * })
     */
    private $morceau;


    /**
     * Get codeDirection
     *
     * @return integer
     */
    public function getCodeDirection()
    {
        return $this->codeDirection;
    }

    /**
     * Set orchestre
     *
     * @param \Orchestres $orchestre
     *
     * @return Direction
     */
    public function setOrchestre(\Orchestres $orchestre = null)
    {
        $this->orchestre = $orchestre;

        return $this;
    }

    /**
     * Get orchestre
     *
     * @return \Orchestres
     */
    public function getOrchestre()
    {
        return $this->orchestre;
    }

    /**
     * Set musicien
     *
     * @param \Musicien $musicien
     *
     * @return Direction
     */
    public function setMusicien(\Musicien $musicien = null)
    {
        $this->musicien = $musicien;

        return $this;
    }

    /**
     * Get musicien
     *
     * @return \Musicien
     */
    public function getMusicien()
    {
        return $this->musicien;
    }

    /**
     * Set morceau
     *
     * @param \Enregistrement $morceau
     *
     * @return Direction
     */
    public function setMorceau(\Enregistrement $morceau = null)
    {
        $this->morceau = $morceau;

        return $this;
    }

    /**
     * Get morceau
     *
     * @return \Enregistrement
     */
    public function getMorceau()
    {
        return $this->morceau;
    }
}
