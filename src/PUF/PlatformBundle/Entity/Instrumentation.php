<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instrumentation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Instrumentation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeInstrumentation;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     * })
     */
    private $codeOeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrument", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Instrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Instrument", referencedColumnName="Code_Instrument")
     * })
     */
    private $codeInstrument;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeInstrumentation()
    {
        return $this->codeInstrumentation;
    }

    /**
     * Set codeOeuvre
     *
     * @param integer $codeOeuvre
     * @return Instrumentation
     */
    public function setCodeOeuvre($codeOeuvre)
    {
        $this->codeOeuvre = $codeOeuvre;

        return $this;
    }

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
     * Set codeInstrument
     *
     * @param integer $codeInstrument
     * @return Instrumentation
     */
    public function setCodeInstrument($codeInstrument)
    {
        $this->codeInstrument = $codeInstrument;

        return $this;
    }

    /**
     * Get codeInstrument
     *
     * @return integer 
     */
    public function getCodeInstrument()
    {
        return $this->codeInstrument;
    }
}
