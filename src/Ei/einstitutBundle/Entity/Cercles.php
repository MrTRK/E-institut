<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cercles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\CerclesRepository")
 */
class Cercles
{



    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_cercles")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    private $cercles_user;



    /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="cercle")
    */
    private $users;
    
    /**
     * Set usersC
     *@param string $usersC
     * 
     * @return Ut
     */
    
    public function setUsersC($usersC)
    {
        $this->users = $usersC;
    
        return $this;
    }

    /**
     * Get usersC
     *
     * @return string 
     */
    public function getUsersC()
    {
        return $this->users;
    }


    /**
    * @ORM\ManyToMany(targetEntity="Messages", inversedBy="cercle")
    * @ORM\JoinTable(name="To_Cercles")
    */

    private $message;
    
    
    
    /**
     * Set usersC
     *@param string $usersC
     * 
     * @return Ut
     */
    
    public function setMessageC($messageC)
    {
        $this->message = $messageC;
    
        return $this;
    }

    /**
     * Get usersC
     *
     * @return string 
     */
    public function getMessageC()
    {
        return $this->message;
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibilite", type="integer")
     */
    private $visibilite;


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
     * @return Cercles
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
     * Set description
     *
     * @param string $description
     * @return Cercles
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

    /**
     * Set visibilite
     *
     * @param integer $visibilite
     * @return Cercles
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;
    
        return $this;
    }

    /**
     * Get visibilite
     *
     * @return integer 
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }
}
