<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Direction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeDirection;

    /**
     * @var \Musicien
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Musicien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     * })
     */
    private $codeMusicien;

    /**
     * @var \Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeMorceau;

    /**
     * @var \Orchestre
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Orchestre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Orchestre", referencedColumnName="Code_Orchestre")
     * })
     */
    private $codeOrchestre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeDirection()
    {
        return $this->codeDirection;
    }

    /**
     * Set codeMusicien
     *
     * @param integer $codeMusicien
     * @return Direction
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
     * Set codeMorceau
     *
     * @param integer $codeMorceau
     * @return Direction
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
     * Set codeOrchestre
     *
     * @param integer $codeOrchestre
     * @return Direction
     */
    public function setCodeOrchestre($codeOrchestre)
    {
        $this->codeOrchestre = $codeOrchestre;

        return $this;
    }

    /**
     * Get codeOrchestre
     *
     * @return integer 
     */
    public function getCodeOrchestre()
    {
        return $this->codeOrchestre;
    }
}
