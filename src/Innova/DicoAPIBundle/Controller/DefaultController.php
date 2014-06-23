<?php

namespace Innova\DicoAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    $voyelles =	$this->getDoctrine()
				     ->getRepository('InnovaDicoAPIBundle:Voyelle')
				     ->findAll();
        return $this->render('InnovaDicoAPIBundle:Default:index.html.twig',
        	array('voyelles' => $voyelles));
    }
}
