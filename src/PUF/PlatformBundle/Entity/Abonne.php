<?php

namespace PUF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonne
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Abonne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codeAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Abonne", type="string", length=100)
     */
    private $nomAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Abonne", type="string", length=100)
     */
    private $prenomAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=100)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255)
     */
    private $password;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getCodeAbonne()
    {
        return $this->codeAbonne;
    }

    /**
     * Set nomAbonne
     *
     * @param string $nomAbonne
     * @return Abonne
     */
    public function setNomAbonne($nomAbonne)
    {
        $this->nomAbonne = $nomAbonne;

        return $this;
    }

    /**
     * Get nomAbonne
     *
     * @return string 
     */
    public function getNomAbonne()
    {
        return $this->nomAbonne;
    }

    /**
     * Set prenomAbonne
     *
     * @param string $prenomAbonne
     * @return Abonne
     */
    public function setPrenomAbonne($prenomAbonne)
    {
        $this->prenomAbonne = $prenomAbonne;

        return $this;
    }

    /**
     * Get prenomAbonne
     *
     * @return string 
     */
    public function getPrenomAbonne()
    {
        return $this->prenomAbonne;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Abonne
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Abonne
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
