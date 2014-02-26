<?php

namespace sil14\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sil14VitrineBundle:Default:index.html.twig');
    }
    
    public function mentionsAction()
    {
        return $this->render('sil14VitrineBundle:Default:mentions.html.twig');
    }
    
    public function catalogueAction()
    {
        $category = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Category')->findAll();
        return $this->render('sil14VitrineBundle:Default:catalogue.html.twig',array('categories' => $category));
    }
    
    public function produitCatAction($idcat)
    {
        $products = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Product')->findBy(
                array('category' => $idcat),
                array('name' => 'ASC'));
        return $this->render('sil14VitrineBundle:Default:produitCat.html.twig',array('produitCat' => $products));
    }
    
    public function produitAction($idprod)
    {
        $product = $this->getDoctrine()->getManager()->getRepository('sil14VitrineBundle:Product')->find($idprod);
        return $this->render('sil14VitrineBundle:Default:produit.html.twig',array('produit' => $product));
    }
    
    public function mesCommandesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();

        $client = $this->getUser();

        $entities = $em->getRepository('sil14VitrineBundle:Commande')->findByClient($client);

        return $this->render('sil14VitrineBundle:Default:mesCommandes.html.twig', array(
            'entities' => $entities,
        ));
    }
    
}