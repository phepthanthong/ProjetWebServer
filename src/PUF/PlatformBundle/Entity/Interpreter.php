<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interpreter
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Interpreter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeInterpreter;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Morceau", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeMorceau;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Musicien", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Musicien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     * })
     */
    private $codeMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrument", type="integer")
     */
    private $codeInstrument;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeInterpreter()
    {
        return $this->codeInterpreter;
    }

    /**
     * Set codeMorceau
     *
     * @param integer $codeMorceau
     * @return Interpreter
     */
    public function setCodeMorceau($codeMorceau)
    {
        $this->codeMorceau = $codeMorceau;

        return $this;
    }

    /**
     * Get codeMorceau
     *
     * @return integer 
     */
    public function getCodeMorceau()
    {
        return $this->codeMorceau;
    }

    /**
     * Set codeMusicien
     *
     * @param integer $codeMusicien
     * @return Interpreter
     */
    public function setCodeMusicien($codeMusicien)
    {
        $this->codeMusicien = $codeMusicien;

        return $this;
    }

    /**
     * Get codeMusicien
     *
     * @return integer 
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }

    /**
     * Set codeInstrument
     *
     * @param integer $codeInstrument
     * @return Interpreter
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
