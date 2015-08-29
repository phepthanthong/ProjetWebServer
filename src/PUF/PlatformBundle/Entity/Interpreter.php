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
     * @var Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Enregistrement", referencedColumnName="Code_Enregistrement")
     * })
     */
    private $enregistrement;
	
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
     * @var Instrument
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
     * Set enregistrement
     *
     * @param Enregistrement $enregistrement
     *
     * @return Interpreter
     */
    public function setEnregistrement($enregistrement)
    {
        $this->enregistrement = $enregistrement;

        return $this;
    }

    /**
     * Get enregistrement
     *
     * @return Enregistrement
     */
    public function getEnregistrement()
    {
        return $this->enregistrement;
    }

    /**
     * Set musicien
     *
     * @param Musicien $musicien
     *
     * @return Interpreter
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
     * Set instrument
     *
     * @param Instrument $instrument
     *
     * @return Interpreter
     */
    public function setInstrument($instrument)
    {
        $this->instrument = $instrument;

        return $this;
    }

    /**
     * Get instrument
     *
     * @return Instrument
     */
    public function getInstrument()
    {
        return $this->instrument;
    }
}
