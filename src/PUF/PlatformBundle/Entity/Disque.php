<?php
// src/PUF/PlatformBundle/Entity/Disque.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disque
 *
 * @ORM\Table(name="Disque")
 * @ORM\Entity
 */
class Disque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Disque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDisque;

    /**
     * @var string
     *
     * @ORM\Column(name="Référence_Album", type="string", length=200, nullable=false)
     */
    private $referenceAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Référence_Disque", type="string", length=10, nullable=true)
     */
    private $referenceDisque;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Album", referencedColumnName="Code_Album")
     * })
     */
    private $album;


    /**
     * Get codeDisque
     *
     * @return integer
     */
    public function getCodeDisque()
    {
        return $this->codeDisque;
    }

    /**
     * Set referenceAlbum
     *
     * @param string $referenceAlbum
     *
     * @return Disque
     */
    public function setReferenceAlbum($referenceAlbum)
    {
        $this->referenceAlbum = $referenceAlbum;

        return $this;
    }

    /**
     * Get referenceAlbum
     *
     * @return string
     */
    public function getReferenceAlbum()
    {
        return $this->referenceAlbum;
    }

    /**
     * Set referenceDisque
     *
     * @param string $referenceDisque
     *
     * @return Disque
     */
    public function setReferenceDisque($referenceDisque)
    {
        $this->referenceDisque = $referenceDisque;

        return $this;
    }

    /**
     * Get referenceDisque
     *
     * @return string
     */
    public function getReferenceDisque()
    {
        return $this->referenceDisque;
    }

    /**
     * Set album
     *
     * @param \Album $album
     *
     * @return Disque
     */
    public function setAlbum(\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \Album
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
