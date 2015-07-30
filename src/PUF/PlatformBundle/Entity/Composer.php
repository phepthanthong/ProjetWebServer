<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Composer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeComposer;

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
     * @ORM\Column(name="Code_Oeuvre", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     * })
     */
    private $codeOeuvre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeComposer()
    {
        return $this->codeComposer;
    }

    /**
     * Set codeMusicien
     *
     * @param integer $codeMusicien
     * @return Composer
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
     * Set codeOeuvre
     *
     * @param integer $codeOeuvre
     * @return Composer
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
}
