<?php

namespace Drak\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Drak\EcommerceBundle\Repository\CommandesRepository")
 */
class Commandes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Drak\UtilisateursBundle\Entity\Utilisateurs", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecomm", type="datetime")
     */
    private $datecomm;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @var array
     *
     * @ORM\Column(name="produits", type="array")
     */
    private $produits;


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
     * Set valider
     *
     * @param boolean $valider
     * @return Commandes
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean 
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set datecomm
     *
     * @param \DateTime $datecomm
     * @return Commandes
     */
    public function setDatecomm($datecomm)
    {
        $this->datecomm = $datecomm;

        return $this;
    }

    /**
     * Get datecomm
     *
     * @return \DateTime 
     */
    public function getDatecomm()
    {
        return $this->datecomm;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     * @return Commandes
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set produits
     *
     * @param array $produits
     * @return Commandes
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return array 
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set utilisateur
     *
     * @param \Drak\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     * @return Commandes
     */
    public function setUtilisateur(\Drak\UtilisateursBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Drak\UtilisateursBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
