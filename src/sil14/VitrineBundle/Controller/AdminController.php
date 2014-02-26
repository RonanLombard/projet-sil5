<?php

namespace sil14\VitrineBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller {
    
    public function adminAccueilAction()
    {
        return $this->render('sil14VitrineBundle:Admin:indexAdmin.html.twig');
    }

}