<?php
/**
 * Created by PhpStorm.
 * User: drak
 * Date: 21/06/15
 * Time: 21:36
 */


namespace Drak\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->commandes = New ArrayCollection();
        $this->adresses = New ArrayCollection();
    }

    /**
     *
     * @ORM\OneToMany(targetEntity="Drak\EcommerceBundle\Entity\Commandes", mappedBy="utilisateur",cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;

    /**
     *
     * @ORM\OneToMany(targetEntity="Drak\EcommerceBundle\Entity\UtilisateurAdresses", mappedBy="utilisateur",cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;


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
     * Add commandes
     *
     * @param \Drak\EcommerceBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\Drak\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \Drak\EcommerceBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\Drak\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adresses
     *
     * @param \Drak\EcommerceBundle\Entity\UtilisateurAdresses $adresses
     * @return Utilisateurs
     */
    public function addAdress(\Drak\EcommerceBundle\Entity\UtilisateurAdresses $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Drak\EcommerceBundle\Entity\UtilisateurAdresses $adresses
     */
    public function removeAdress(\Drak\EcommerceBundle\Entity\UtilisateurAdresses $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
