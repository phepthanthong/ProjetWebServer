<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="Pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Pays", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePays;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Pays", type="string", length=50)
     */
    private $nomPays;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodePays()
    {
        return $this->codePays;
    }

    /**
     * Set nomPays
     *
     * @param string $nomPays
     * @return Pays
     */
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get nomPays
     *
     * @return string 
     */
    public function getNomPays()
    {
        return $this->nomPays;
    }
}
