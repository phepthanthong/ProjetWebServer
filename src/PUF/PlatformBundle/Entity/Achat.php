<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Achat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeAchat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Enregistrement", type="integer")
     *
     * @ORM\OneToOne(targetEntity="src\AppBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Enregistrement", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeEnregistrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Abonne", type="integer")
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Abonne", referencedColumnName="Code_Abonne")
     * })
     */
    private $codeAbonne;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeAchat()
    {
        return $this->codeAchat;
    }

    /**
     * Set codeEnregistrement
     *
     * @param integer $codeEnregistrement
     * @return Achat
     */
    public function setCodeEnregistrement($codeEnregistrement)
    {
        $this->codeEnregistrement = $codeEnregistrement;

        return $this;
    }

    /**
     * Get codeEnregistrement
     *
     * @return integer 
     */
    public function getCodeEnregistrement()
    {
        return $this->codeEnregistrement;
    }

    /**
     * Set codeAbonne
     *
     * @param integer $codeAbonne
     * @return Achat
     */
    public function setCodeAbonne($codeAbonne)
    {
        $this->codeAbonne = $codeAbonne;

        return $this;
    }

    /**
     * Get codeAbonne
     *
     * @return integer 
     */
    public function getCodeAbonne()
    {
        return $this->codeAbonne;
    }
}
