<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle_Abrege", type="string", length=100)
     */
    private $libelleAbrege;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeGenre()
    {
        return $this->codeGenre;
    }

    /**
     * Set libelleAbrege
     *
     * @param string $libelleAbrege
     * @return Genre
     */
    public function setLibelleAbrege($libelleAbrege)
    {
        $this->libelleAbrege = $libelleAbrege;

        return $this;
    }

    /**
     * Get libelleAbrege
     *
     * @return string 
     */
    public function getLibelleAbrege()
    {
        return $this->libelleAbrege;
    }
}
