<?php
// src/PUF/PlatformBundle/Entity/Instrumentation.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instrumentation
 *
 * @ORM\Table(name="Instrumentation")
 * @ORM\Entity
 */
class Instrumentation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrumentation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInstrumentation;

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
     * @var Instrument
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Instrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Instrument", referencedColumnName="Code_Instrument")
     * })
     */
    private $instrument;


    /**
     * Get codeInstrumentation
     *
     * @return integer
     */
    public function getCodeInstrumentation()
    {
        return $this->codeInstrumentation;
    }

    /**
     * Set oeuvre
     *
     * @param Oeuvre $oeuvre
     *
     * @return Instrumentation
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

    /**
     * Set instrument
     *
     * @param Instrument $instrument
     *
     * @return Instrumentation
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
