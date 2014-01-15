<?php
// src/Acme/UserBundle/Entity/User.php

namespace Ei\einstitutBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections ;
/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{



    /**
    * @ORM\OneToMany(targetEntity="Evenements", mappedBy="evenements_user")
    */
    private $evenement;




    /**
    * @ORM\OneToMany(targetEntity="Tutoriels_EnLigne", mappedBy="user_tuto")
    */
    protected $user_tuto_en_ligne;


    /**
    * @ORM\OneToMany(targetEntity="Preconisation", mappedBy="user-preconisation")
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

    public function __construct()
    {
        $this->fiche = new ArrayCollection();   
        parent::__construct();
        // your own logic
    }
    
    
    
}