<?php
// src/PUF/PlatformBundle/Entity/CompositionDisque.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionDisque
 *
 * @ORM\Table(name="Composition_Disque")
 * @ORM\Entity
 */
class CompositionDisque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Contenir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeContenir;

    /**
     * @var integer
     *
     * @ORM\Column(name="Position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var Disque
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Disque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Disque", referencedColumnName="Code_Disque")
     * })
     */
    private $disque;

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
     * Get codeContenir
     *
     * @return integer
     */
    public function getCodeContenir()
    {
        return $this->codeContenir;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return CompositionDisque
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set disque
     *
     * @param Disque $disque
     *
     * @return CompositionDisque
     */
    public function setDisque($disque)
    {
        $this->disque = $disque;

        return $this;
    }

    /**
     * Get disque
     *
     * @return Disque
     */
    public function getDisque()
    {
        return $this->disque;
    }

    /**
     * Set enregistrement
     *
     * @param Enregistrement $enregistrement
     *
     * @return CompositionDisque
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
}
