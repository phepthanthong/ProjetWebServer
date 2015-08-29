<?php
// src/PUF/PlatformBundle/Entity/Editeur.php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table(name="Editeur")
 * @ORM\Entity
 */
class Editeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Editeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEditeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Editeur", type="string", length=50, nullable=false)
     */
    private $nomEditeur;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="PUF\PlatformBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     * })
     */
    private $pays;


    /**
     * Get codeEditeur
     *
     * @return integer
     */
    public function getCodeEditeur()
    {
        return $this->codeEditeur;
    }

    /**
     * Set nomEditeur
     *
     * @param string $nomEditeur
     *
     * @return Editeur
     */
    public function setNomEditeur($nomEditeur)
    {
        $this->nomEditeur = $nomEditeur;

        return $this;
    }

    /**
     * Get nomEditeur
     *
     * @return string
     */
    public function getNomEditeur()
    {
        return $this->nomEditeur;
    }

    /**
     * Set pays
     *
     * @param Pays $pays
     *
     * @return Editeur
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
