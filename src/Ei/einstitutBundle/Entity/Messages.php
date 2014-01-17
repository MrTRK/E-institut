<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\MessagesRepository")
 */
class Messages
{



    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_messages")
    * @ORM\JoinColumn(name="from_user_id", referencedColumnName="id")
    */

    protected $messages_user;


    /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="message")
    */
    private $users;



    /**
    * @ORM\ManyToMany(targetEntity="Cercles", mappedBy="message")
    */
    private $cercle;





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
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="datetime")
     */
    private $dateMessage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;


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
     * Set objet
     *
     * @param string $objet
     * @return Messages
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    
        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Messages
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
     * Set dateMessage
     *
     * @param \DateTime $dateMessage
     * @return Messages
     */
    public function setDateMessage($dateMessage)
    {
        $this->dateMessage = $dateMessage;
    
        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return \DateTime 
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Messages
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
