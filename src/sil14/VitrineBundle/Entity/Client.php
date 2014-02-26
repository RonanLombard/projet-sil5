<?php

namespace sil14\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Client
 */
class Client implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mail;


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
     * Set name
     *
     * @param string $name
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    public function __toString() { 
        return $this->getName(); 
    } 
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add products
     *
     * @param \sil14\VitrineBundle\Entity\Commande $products
     * @return Client
     */
    public function addProduct(\sil14\VitrineBundle\Entity\Commande $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \sil14\VitrineBundle\Entity\Commande $products
     */
    public function removeProduct(\sil14\VitrineBundle\Entity\Commande $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commands;


    /**
     * Add commands
     *
     * @param \sil14\VitrineBundle\Entity\Commande $commands
     * @return Client
     */
    public function addCommand(\sil14\VitrineBundle\Entity\Commande $commands)
    {
        $this->commands[] = $commands;

        return $this;
    }

    /**
     * Remove commands
     *
     * @param \sil14\VitrineBundle\Entity\Commande $commands
     */
    public function removeCommand(\sil14\VitrineBundle\Entity\Commande $commands)
    {
        $this->commands->removeElement($commands);
    }

    /**
     * Get commands
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommands()
    {
        return $this->commands;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commande;


    /**
     * Add commande
     *
     * @param \sil14\VitrineBundle\Entity\Commande $commande
     * @return Client
     */
    public function addCommande(\sil14\VitrineBundle\Entity\Commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \sil14\VitrineBundle\Entity\Commande $commande
     */
    public function removeCommande(\sil14\VitrineBundle\Entity\Commande $commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommande()
    {
        return $this->commande;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commandes;


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
     * @var boolean
     */
    private $isAdmin;


    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return Client
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }
    /**
     * @var string
     */
    private $password;


    /**
     * Set password
     *
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
     public function getUsername() {
        return $this->mail;
    }

    public function getSalt() {
        return null;
    }
    
    public function getRoles() {
        if ($this->getIsAdmin())
            return array('ROLE_ADMIN');
        else
            return array('ROLE_USER');
    }

    public function eraseCredentials() {

    }
    public function serialize() {
        // pour pouvoir sérialiser le Client en session
        return serialize(array($this->id));
    }
    public function unserialize($serialized) {
        list ($this->id) = unserialize($serialized);
    }

}
