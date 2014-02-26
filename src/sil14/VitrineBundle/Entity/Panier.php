<?php

# Entity/Panier.php
namespace sil14\VitrineBundle\Entity;

class Panier {
    private $contenu;
    //Tableau - contenu[i] = quantite d'article d’id=i dans le panier)
    
    public function __construct() {
        $this->contenu = array();
    }
    
    public function getContenu() {
        return $this->contenu; 
    }
    
    public function ajoutArticle($articleId, $qte) {
        if (array_key_exists($articleId,$this->contenu)){
            $this->contenu[$articleId]+=$qte;
        }
        else {
            $this->contenu[$articleId]=$qte;
        } 
    }
    
    public function enleverArticle($articleId, $qte) {
        $this->contenu[$articleId]-=$qte;
        if($this->contenu[$articleId] == 0){
           $this->supprimeArticle($articleId);
        }
    }
    
    public function supprimeArticle($articleId) {
         unset($this->contenu[$articleId]);
    }
    
    public function viderPanier() {
        $this->contenu = array();
    }
}