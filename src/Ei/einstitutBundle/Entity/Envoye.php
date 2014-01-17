<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Envoye
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\EnvoyeRepository")
 */
class Envoye
{


    /**
    * @ORM\ManyToOne(targetEntity="Listes", inversedBy="listes_envoye")
    * @ORM\JoinColumn(name="listes_id", referencedColumnName="id")
    */

    protected $envoye_listes;




    /**
    * @ORM\ManyToOne(targetEntity="NewsLetters", inversedBy="newsletter_envoye")
    * @ORM\JoinColumn(name="newsletters_id", referencedColumnName="id")
    */

    protected $envoye_newsletter;





    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Envoye
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
