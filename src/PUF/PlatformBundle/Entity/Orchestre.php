<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orchestre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Orchestre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeOrchestre;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Orchestre", type="string", length=100)
     */
    private $nomOrchestre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeOrchestre()
    {
        return $this->codeOrchestre;
    }

    /**
     * Set nomOrchestre
     *
     * @param string $nomOrchestre
     * @return Orchestre
     */
    public function setNomOrchestre($nomOrchestre)
    {
        $this->nomOrchestre = $nomOrchestre;

        return $this;
    }

    /**
     * Get nomOrchestre
     *
     * @return string 
     */
    public function getNomOrchestre()
    {
        return $this->nomOrchestre;
    }
}
