<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualites
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ActualitesRepository")
 */
class Actualites
{


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_actualite")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */

    protected $user;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_actualite", type="datetime")
     */
    private $dateActualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiration", type="datetime")
     */
    private $dateExpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="url_image", type="string", length=255)
     */
    private $urlImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
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
     * Set titre
     *
     * @param string $titre
     * @return Actualites
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
     * @return Actualites
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

    /**
     * Set dateActualite
     *
     * @param \DateTime $dateActualite
     * @return Actualites
     */
    public function setDateActualite($dateActualite)
    {
        $this->dateActualite = $dateActualite;
    
        return $this;
    }

    /**
     * Get dateActualite
     *
     * @return \DateTime 
     */
    public function getDateActualite()
    {
        return $this->dateActualite;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     * @return Actualites
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
    
        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime 
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     * @return Actualites
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;
    
        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string 
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Actualites
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
