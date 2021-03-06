<?php
// src/PUF/PlatformBundle/Entity/Achat.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="Achat")
 * @ORM\Entity
 */
class Achat
{
    /**
     * @var integer
	 *
     * @ORM\Column(name="Code_Achat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAchat;

    /**
     * @var Enregistrement
     *
     * @ORM\OneToOne(targetEntity="PUF\PlatformBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Enregistrement", referencedColumnName="Code_Enregistrement")
     * })
     */
    private $enregistrement;

    /**
     * @var Abonne
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Abonné", referencedColumnName="Code_Abonné")
     * })
     */
    private $abonne;

	/**
     * Get codeAchat
     *
     * @return integer
     */
    public function getCodeAchat()
    {
        return $this->codeAchat;
    }

    /**
     * Set enregistrement
     *
     * @param Enregistrement $enregistrement
     *
     * @return Achat
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
     * Set abonne
     *
     * @param Abonne $abonne
     *
     * @return Achat
     */
    public function setAbonne($abonne)
    {
        $this->abonne = $abonne;

        return $this;
    }

    /**
     * Get abonne
     *
     * @return Abonne
     */
    public function getAbonne()
    {
        return $this->abonne;
    }
}
