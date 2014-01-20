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
     * @ORM\Column(name="Nom", type="string", length=255, nullable=true)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=true)
     */
    private $prenom;
    
    
    
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
     * Set nom
     *
     * @param string $nom
     * @return Ut
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
     * Set prenom
     *
     * @param string $prenom
     * @return Ut
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
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
    
    
    
    
    /**
     * Set ComentForum
     *
     * @param string $comentForum
     * @return Ut
     */
    public function setCommentForm($comentForum)
    {
        $this->comentForum = $comentForum;
    
        return $this;
    }

    /**
     * Get comentForum
     *
     * @return string 
     */
    public function getComentForum()
    {
        return $this->comentforum;
    }


    /**
     * Set userForum
     *
     * @param string $userForum
     * @return Ut
     */
    public function setUserForum($userForum)
    {
        $this->user_forum = $userForum;
    
        return $this;
    }

    /**
     * Get userForum
     *
     * @return string 
     */
    public function getUserForum()
    {
        return $this->user_forum;
    }



    /**
     * Set fiche
     *
     * @param string $fiche
     * @return Ut
     */
    public function setFiche($fiche)
    {
        $this->fiche = $fiche;
    
        return $this;
    }

    /**
     * Get fiche
     *
     * @return string 
     */
    public function getFiche()
    {
        return $this->fiche;
    }


    /**
     * Set fiches
     *
     * @param string $fiches
     * @return Ut
     */
    public function setFiches($fiches)
    {
        $this->fiches = $fiches;
    
        return $this;
    }

    /**
     * Get fiches
     *
     * @return string 
     */
    public function getFiches()
    {
        return $this->fiches;
    }


    /**
     * Set preconisation
     *
     * @param string $preconisation
     * @return Ut
     */
    public function setPreconisation($preconisation)
    {
        $this->preconisation = $preconisation;
    
        return $this;
    }

    /**
     * Get preconisation
     *
     * @return string 
     */
    public function getPreconisation()
    {
        return $this->preconisation;
    }



    /**
     * Set userTutoEnLigne
     *
     * @param string $user_tuto_en_ligne
     * @return Ut
     */
    public function setUserTutoEnLigne($user_tuto_en_ligne)
    {
        $this->user_tuto_en_ligne = $user_tuto_en_ligne;
    
        return $this;
    }

    /**
     * Get userTutoEnLigne
     *
     * @return string 
     */
    public function getUserTutoEnLigne()
    {
        return $this->user_tuto_en_ligne;
    }


    /**
     * Set evenement
     *
     * @param string $evenement
     * @return Ut
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;
    
        return $this;
    }

    /**
     * Get evenement
     *
     * @return string 
     */
    public function getEvenement()
    {
        return $this->evenement;
    }


    /**
     * Set evenements
     *
     * @param string $evenements
     * @return Ut
     */
    public function setEvenements($evenements)
    {
        $this->evenements = $evenements;
    
        return $this;
    }

    /**
     * Get evenements
     *
     * @return string 
     */
    public function getEvenements()
    {
        return $this->evenements;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return Ut
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }


    /**
     * Set cercle
     *
     * @param string $cercle
     * @return Ut
     */
    public function setCercle($cercle)
    {
        $this->cercle = $cercle;
    
        return $this;
    }

    /**
     * Get cercle
     *
     * @return string 
     */
    public function getCercle()
    {
        return $this->cercle;
    }


    /**
     * Set userCercles
     *
     * @param string $user_cercles
     * @return Ut
     */
    public function setUserCercles($user_cercles)
    {
        $this->user_cercles = $user_cercles;
    
        return $this;
    }

    /**
     * Get userCercles
     *
     * @return string 
     */
    public function getUserCercles()
    {
        return $this->user_cercles;
    }

    /**
     * Set userEticket
     *
     * @param string $user_eticket
     * @return Ut
     */
    public function setUserEticket($user_eticket)
    {
        $this->user_eticket = $user_eticket;
    
        return $this;
    }

    /**
     * Get userEticket
     *
     * @return string 
     */
    public function getUserEticket()
    {
        return $this->user_messages;
    }

    /**
     * Set userMessage
     *
     * @param string $user_messages
     * @return Ut
     */
    public function setUserMessage($user_messages)
    {
        $this->user_messages = $user_messages;
    
        return $this;
    }

    /**
     * Get userMessage
     *
     * @return string 
     */
    public function getUserMessage()
    {
        return $this->user_messages;
    }

    /**
     * Set userActualite
     *
     * @param string $user_actualite
     * @return Ut
     */
    public function setUserActualite($user_actualite)
    {
        $this->user_actualite = $user_actualite;
    
        return $this;
    }

    /**
     * Get userActualite
     *
     * @return string 
     */
    public function getUserActualite()
    {
        return $this->user_actualite;
    }

    /**
     * Set userContact
     *
     * @param string $user_contact
     * @return Ut
     */
    public function setUserContact($user_contact)
    {
        $this->user_contact = $user_contact;
    
        return $this;
    }

    /**
     * Get userContact
     *
     * @return string 
     */
    public function getUserContact()
    {
        return $this->user_contact;
    }

    /**
     * Set userContact1
     *
     * @param string $user_contact1
     * @return Ut
     */
    public function setUserContact1($user_contact1)
    {
        $this->user_contact1 = $user_contact1;
    
        return $this;
    }

    /**
     * Get userContact1
     *
     * @return string 
     */
    public function getUserContact1()
    {
        return $this->user_contact1;
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