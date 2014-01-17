<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsLetters
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\NewsLettersRepository")
 */
class NewsLetters
{


    



    /**
    * @ORM\OneToMany(targetEntity="Envoye", mappedBy="envoye_newsletter")
    */
    protected $newsletter_envoye;




    /**
    * @ORM\ManyToOne(targetEntity="TypeLetter", inversedBy="typeletter_newsletter")
    * @ORM\JoinColumn(name="typeletter_id", referencedColumnName="id")
    */

    protected $newsletter_typeletter;



    /**
    * @ORM\OneToMany(targetEntity="Clics", mappedBy="clic_newsletter")
    */
    protected $newsletter_clic;




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
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;


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
     * @return NewsLetters
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

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return NewsLetters
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    public function __construct()
    {

        $this->newsletter_envoye = new \Doctrine\Common\Collections\ArrayCollection();
        $this->newsletter_clic = new \Doctrine\Common\Collections\ArrayCollection();
         
        parent::__construct();
        // your own logic
    }
}
