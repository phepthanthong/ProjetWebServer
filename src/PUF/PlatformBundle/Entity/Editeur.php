<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Editeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeEditeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Editeur", type="string", length=100)
     */
    private $nomEditeur;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     * })
     */
    private $codePays;


    /**
     * Get id
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
     * Set codePays
     *
     * @param integer $codePays
     * @return Editeur
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePays
     *
     * @return integer 
     */
    public function getCodePays()
    {
        return $this->codePays;
    }
}
