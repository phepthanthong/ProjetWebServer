<?php
// src/PUF/PlatformBundle/Entity/CompositionOeuvre.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionOeuvre
 *
 * @ORM\Table(name="Composition_Oeuvre")
 * @ORM\Entity
 */
class CompositionOeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer_Oeuvre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposerOeuvre;

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
     * @var Composition
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Composition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     * })
     */
    private $composition;


    /**
     * Get codeComposerOeuvre
     *
     * @return integer
     */
    public function getCodeComposerOeuvre()
    {
        return $this->codeComposerOeuvre;
    }

    /**
     * Set oeuvre
     *
     * @param Oeuvre $oeuvre
     *
     * @return CompositionOeuvre
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
     * Set composition
     *
     * @param Composition $composition
     *
     * @return CompositionOeuvre
     */
    public function setComposition($composition)
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * Get composition
     *
     * @return Composition
     */
    public function getComposition()
    {
        return $this->composition;
    }
}
