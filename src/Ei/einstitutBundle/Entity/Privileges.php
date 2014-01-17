<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privileges
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\PrivilegesRepository")
 */
class Privileges
{


    /**
    * @ORM\ManyToOne(targetEntity="CategoriePrivilege", inversedBy="roles_categorie_privileges")
    * @ORM\JoinColumn(name="categorie_privileges_id", referencedColumnName="id")
    */

    protected $categorie_privileges_roles;


    /**
    * @ORM\ManyToOne(targetEntity="Roles", inversedBy="roles_privileges")
    * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
    */

    protected $privileges_roles; 




    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Privileges
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Privileges
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
