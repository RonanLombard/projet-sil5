<?php

namespace sil14\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 */
class Commande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \sil14\VitrineBundle\Entity\Client
     */
    private $client;


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
     * Set client
     *
     * @param \sil14\VitrineBundle\Entity\Client $client
     * @return Commande
     */
    public function setClient(\sil14\VitrineBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \sil14\VitrineBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $etat;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commande
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

    /**
     * Set etat
     *
     * @param string $etat
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ligneCommandes;
    
    public function __toString() { 
        return $this->getLigneCommandes(); 
    } 
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligneCommandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligneCommandes
     *
     * @param \sil14\VitrineBundle\Entity\LigneCommande $ligneCommandes
     * @return Commande
     */
    public function addLigneCommande(\sil14\VitrineBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes[] = $ligneCommandes;

        return $this;
    }

    /**
     * Remove ligneCommandes
     *
     * @param \sil14\VitrineBundle\Entity\LigneCommande $ligneCommandes
     */
    public function removeLigneCommande(\sil14\VitrineBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes->removeElement($ligneCommandes);
    }

    /**
     * Get ligneCommandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneCommandes()
    {
        return $this->ligneCommandes;
    }
}
