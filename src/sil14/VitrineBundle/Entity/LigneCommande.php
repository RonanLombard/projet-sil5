<?php

namespace sil14\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 */
class LigneCommande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @var \sil14\VitrineBundle\Entity\Commande
     */
    private $commande;

    /**
     * @var \sil14\VitrineBundle\Entity\Product
     */
    private $product;


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
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return LigneCommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set commande
     *
     * @param \sil14\VitrineBundle\Entity\Commande $commande
     * @return LigneCommande
     */
    public function setCommande(\sil14\VitrineBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \sil14\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set product
     *
     * @param \sil14\VitrineBundle\Entity\Product $product
     * @return LigneCommande
     */
    public function setProduct(\sil14\VitrineBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \sil14\VitrineBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
