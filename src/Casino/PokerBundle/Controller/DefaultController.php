<?php

namespace Casino\PokerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

	    public function indexAction()
	    {
	        return $this->render('CasinoPokerBundle:Default:index.html.twig', array());
	    }
	    
}
