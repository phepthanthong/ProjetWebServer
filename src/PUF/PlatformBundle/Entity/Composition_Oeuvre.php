<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition_Oeuvre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Composition_Oeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeComposerOeuvre;

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
     * @ORM\Column(name="Code_Composition", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Composition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     * })
     */
    private $codeComposition;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeComposerOeuvre()
    {
        return $this->codeComposerOeuvre;
    }

    /**
     * Set codeOeuvre
     *
     * @param integer $codeOeuvre
     * @return Composition_Oeuvre
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
     * Set codeComposition
     *
     * @param integer $codeComposition
     * @return Composition_Oeuvre
     */
    public function setCodeComposition($codeComposition)
    {
        $this->codeComposition = $codeComposition;

        return $this;
    }

    /**
     * Get codeComposition
     *
     * @return integer 
     */
    public function getCodeComposition()
    {
        return $this->codeComposition;
    }
}
