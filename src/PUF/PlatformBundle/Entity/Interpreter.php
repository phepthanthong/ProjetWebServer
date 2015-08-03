<?php
// src/PUF/PlatformBundle/Entity/Interpreter.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interpreter
 *
 * @ORM\Table(name="Interpréter")
 * @ORM\Entity
 */
class Interpreter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Interpréter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInterpreter;

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
     * @var \Musicien
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Musicien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     * })
     */
    private $musicien;

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
     * Get codeInterpreter
     *
     * @return integer
     */
    public function getCodeInterpreter()
    {
        return $this->codeInterpreter;
    }
	
	/**
     * Set morceau
     *
     * @param \Enregistrement $morceau
     *
     * @return Interpreter
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

    /**
     * Set musicien
     *
     * @param \Musicien $musicien
     *
     * @return Interpreter
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
     * Set instrument
     *
     * @param \Instrument $instrument
     *
     * @return Interpreter
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
}
