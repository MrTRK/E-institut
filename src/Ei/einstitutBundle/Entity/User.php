<?php
// src/Acme/UserBundle/Entity/User.php

namespace Ei\einstitutBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{

    
    




    /**
    * @ORM\OneToMany(targetEntity="CommentaireForum", mappedBy="comment_user")
    */
    protected $comentforum;

    /**
    * @ORM\OneToMany(targetEntity="Forum", mappedBy="forum_user")
    */
    protected $user_forum;

    /**
    * @ORM\OneToMany(targetEntity="Contact", mappedBy="contact_user2")
    */
    protected $user_contact1;

     /**
    * @ORM\OneToMany(targetEntity="Contact", mappedBy="contact_user1")
    */
    protected $user_contact;


     /**
    * @ORM\OneToMany(targetEntity="Actualites", mappedBy="user")
    */
    protected $user_actualite;



    /**
    * @ORM\OneToMany(targetEntity="Messages", mappedBy="messages_user")
    */
    protected $user_messages;


    /**
    * @ORM\OneToMany(targetEntity="Eticket", mappedBy="eticket_user")
    */
    protected $user_eticket;



    /**
    * @ORM\OneToMany(targetEntity="Cercles", mappedBy="cercles_user")
    */
    protected $user_cercles;



    /**
    * @ORM\ManyToMany(targetEntity="Cercles", inversedBy="users")
    * @ORM\JoinTable(name="Partage_Utilisateurs_Cercles")
    */

    protected $cercle;




    /**
    * @ORM\ManyToMany(targetEntity="Messages", inversedBy="users")
    * @ORM\JoinTable(name="To_Users")
    */

    protected $message;



    /**
    * @ORM\ManyToMany(targetEntity="Evenements", inversedBy="users")
    * @ORM\JoinTable(name="Partage_evenements_Utilisateurs")
    */

    protected $evenements;


    /**
    * @ORM\OneToMany(targetEntity="Evenements", mappedBy="evenements_user")
    */
    private $evenement;




    /**
    * @ORM\OneToMany(targetEntity="TutorielsEnLigne", mappedBy="user_tuto")
    */
    protected $user_tuto_en_ligne;


    /**
    * @ORM\OneToMany(targetEntity="Preconisation", mappedBy="user_preconisation")
    */
    protected $preconisation;

    



    
    /**
    * @ORM\ManyToMany(targetEntity="Fiche", inversedBy="users")
    * @ORM\JoinTable(name="Favoris")
    */

    protected $fiche;
    
   

    /**
    * @ORM\OneToMany(targetEntity="Fiche", mappedBy="user")
    */
    protected $fiches;
    
    




    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @var string
     *
     * @ORM\Column(name="Avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=300 , nullable=true)
     */
    private $adresse;


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
     * Set avatar
     *
     * @param string $avatar
     * @return Ut
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Ut
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Ut
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Ut
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Ut
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Ut
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


    public function __construct()
    {

        $this->evenements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->message = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cercle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fiche = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comentforum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_forum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_contact1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_actualite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_messages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_eticket = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_cercles = new \Doctrine\Common\Collections\ArrayCollection(); 

        parent::__construct();
        // your own logic
    }


    
}