<?php

namespace Ei\einstitutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Critere_has_preconisation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ei\einstitutBundle\Entity\Critere_has_preconisationRepository")
 */
class Critere_has_preconisation
{




    
 
    /**
     * @ORM\ManyToOne(targetEntity="Criteres")
     * @ORM\JoinColumn(name="criteres_id", referencedColumnName="id")
    **/
        private $criteres;


    /**
     * @ORM\ManyToOne(targetEntity="Notes")
     * @ORM\JoinColumn(name="notes_id", referencedColumnName="id")
    **/
         private $notes;
     
    /**
     * @ORM\ManyToOne(targetEntity="Preconisation")
     * @ORM\JoinColumn(name="preconisation_id", referencedColumnName="id")
    **/     
         private $preconisation;





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
