<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Composition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeComposition;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Composition", type="string", length=100)
     */
    private $titreComposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee", type="integer")
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="Composante_Composition", type="integer")
     */
    private $composanteComposition;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeComposition()
    {
        return $this->codeComposition;
    }

    /**
     * Set titreComposition
     *
     * @param string $titreComposition
     * @return Composition
     */
    public function setTitreComposition($titreComposition)
    {
        $this->titreComposition = $titreComposition;

        return $this;
    }

    /**
     * Get titreComposition
     *
     * @return string 
     */
    public function getTitreComposition()
    {
        return $this->titreComposition;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Composition
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set composanteComposition
     *
     * @param integer $composanteComposition
     * @return Composition
     */
    public function setComposanteComposition($composanteComposition)
    {
        $this->composanteComposition = $composanteComposition;

        return $this;
    }

    /**
     * Get composanteComposition
     *
     * @return integer 
     */
    public function getComposanteComposition()
    {
        return $this->composanteComposition;
    }
}
