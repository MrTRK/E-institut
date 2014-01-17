<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ListesRepository")
 */
class Listes
{


    



    /**
    * @ORM\OneToMany(targetEntity="BaseContacts", mappedBy="base_contact_listes")
    */
    protected $listes_base_contact;



     /**
    * @ORM\OneToMany(targetEntity="Envoye", mappedBy="envoye_listes")
    */
    protected $listes_envoye;



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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;


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
     * Set titre
     *
     * @param string $titre
     * @return Listes
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    public function __construct()
    {

        $this->listes_base_contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->listes_envoye = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }
}
