<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition_Disque
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Composition_Disque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeContenir;

    /**
     * @var \Disque
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Disque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Disque", referencedColumnName="Code_Disque")
     * })
     */
    private $codeDisque;

    /**
     * @var \Enregitrement
     *
     * @ORM\ManyToOne(targetEntity="src\AppBundle\Entity\Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeMorceau;

    /**
     * @var string
     *
     * @ORM\Column(name="Position", type="string", length=100)
     */
    private $position;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeContenir()
    {
        return $this->codeContenir;
    }

    /**
     * Set codeDisque
     *
     * @param integer $codeDisque
     * @return Composition_Disque
     */
    public function setCodeDisque($codeDisque)
    {
        $this->codeDisque = $codeDisque;

        return $this;
    }

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
     * Set codeMorceau
     *
     * @param integer $codeMorceau
     * @return Composition_Disque
     */
    public function setCodeMorceau($codeMorceau)
    {
        $this->codeMorceau = $codeMorceau;

        return $this;
    }

    /**
     * Get codeMorceau
     *
     * @return integer 
     */
    public function getCodeMorceau()
    {
        return $this->codeMorceau;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Composition_Disque
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
