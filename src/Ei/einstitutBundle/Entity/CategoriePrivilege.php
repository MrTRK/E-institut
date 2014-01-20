<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriePrivilege
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\CategoriePrivilegeRepository")
 */
class CategoriePrivilege
{

    



    /**
    * @ORM\OneToMany(targetEntity="Privileges", mappedBy="categorie_privileges_roles")
    */
    private $roles_categorie_privileges;
    
    
    /**
     * Set Rolescategorieprivileges
     *@param string $rolescategorieprivileges
     * 
     * @return Ut
     */
    
    public function setRolescategorieprivileges($rolescategorieprivileges)
    {
        $this->roles_categorie_privileges = $rolescategorieprivileges;
    
        return $this;
    }

    /**
     * Get Rolescategorieprivileges
     *
     * @return string 
     */
    public function getRolescategorieprivileges()
    {
        return $this->roles_categorie_privileges;
    }
    
    

    



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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set libelle
     *
     * @param string $libelle
     * @return CategoriePrivilege
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CategoriePrivilege
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function __construct()
    {

        $this->roles_categorie_privileges = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }
}
