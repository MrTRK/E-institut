<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\ContactRepository")
 */
class Contact
{

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_contact1")
    * @ORM\JoinColumn(name="child_user_id", referencedColumnName="id")
    */

    protected $contact_user2;


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="user_contact")
    * @ORM\JoinColumn(name="parent_user_id", referencedColumnName="id")
    */

    protected $contact_user1;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
