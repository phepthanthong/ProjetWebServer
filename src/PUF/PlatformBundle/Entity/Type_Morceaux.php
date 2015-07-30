<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Morceaux
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Type_Morceaux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeType;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle_Type", type="string", length=100)
     */
    private $libelleType;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Set libelleType
     *
     * @param string $libelleType
     * @return Type_Morceaux
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;

        return $this;
    }

    /**
     * Get libelleType
     *
     * @return string 
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Type_Morceaux
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
