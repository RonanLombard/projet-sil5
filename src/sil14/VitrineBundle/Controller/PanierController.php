<?php

namespace sil14\VitrineBundle\Controller;

use sil14\VitrineBundle\Entity\Panier;
use sil14\VitrineBundle\Entity\Commande;
use sil14\VitrineBundle\Entity\LigneCommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function contenuPanierAction()
    {   

        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $session->set('panier', $panier);
        $listProduct=$panier->getContenu();
        $data = array();
        
        //$panier->viderPanier();
        
        foreach ($listProduct as $key => $value){
            $product = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Product')->find($key);
            $data[$key] = array('qte' => $value, 'product' => $product);
        }
        
        return $this->render('sil14VitrineBundle:Default:contenuPanier.html.twig',array('panier' => $data));
    }
    
    public function addPanierAction($id,$nb){
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->ajoutArticle($id,$nb);
        $session->set('panier', $panier);
        
        return $this->redirect($this->generateUrl('sil14_vitrine_contenuPanier'));
    }
    
    public function delPanierAction($id,$nb){
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->enleverArticle($id,$nb);
        $session->set('panier', $panier);
        
        return $this->redirect($this->generateUrl('sil14_vitrine_contenuPanier'));
    }
    
    public function remPanierAction($id){
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());
        $panier->supprimeArticle($id);
        $session->set('panier', $panier);
        
        return $this->redirect($this->generateUrl('sil14_vitrine_contenuPanier'));
    }
    
    public function validationPanierAction(){
        
        $session = $this->getRequest()->getSession();
        $data = array();
        $id = $session->get('id');
        $prixCommande = 0;
        
        $maCommande = new Commande();
        //$maCommande->setClient(1);
        $maCommande->setDate(new \DateTime());
        $maCommande->setEtat(true);
        
        $this->getDoctrine()->getManager()->persist($maCommande);
        
        $panier = $session->get('panier', new Panier());
        $listProduct=$panier->getContenu();
        foreach ($listProduct as $key => $value){
            $product = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Product')->find($key);
            $data[$key] = array('qte' => $value, 'product' => $product);
            
            $maLigneCommande = new LigneCommande();
            $maLigneCommande->setCommande($maCommande);
            $maLigneCommande->setProduct($product);
            $maLigneCommande->setPrix($product->getPrice());
            $maLigneCommande->setQuantite($value);
            $prixCommande += $product->getPrice() * $value;
            
            $this->getDoctrine()->getManager()->persist($maLigneCommande);
        }
        
        $this->getDoctrine()->getManager()->flush();
       
        $panier->viderPanier();
        
        return $this->render('sil14VitrineBundle:Default:validationPanier.html.twig',array('panier' => $data, 'commande' => $maCommande, 'prixtotal' => $prixCommande));
    }
}
