<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disque
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Disque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeDisque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Album", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Album", referencedColumnName="Code_Album")
     * })
     */
    private $codeAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference_Album", type="string", length=100)
     */
    private $referenceAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference_Disque", type="string", length=100)
     */
    private $referenceDisque;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeDisque()
    {
        return $this->codeDisque;
    }

    /**
     * Set codeAlbum
     *
     * @param integer $codeAlbum
     * @return Disque
     */
    public function setCodeAlbum($codeAlbum)
    {
        $this->codeAlbum = $codeAlbum;

        return $this;
    }

    /**
     * Get codeAlbum
     *
     * @return integer 
     */
    public function getCodeAlbum()
    {
        return $this->codeAlbum;
    }

    /**
     * Set referenceAlbum
     *
     * @param string $referenceAlbum
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
}
