<?php

namespace CardioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();

      $fichas = $em->getRepository('CardioBundle:Ficha')->findAll();

      return $this->render('ficha/index.html.twig', array(
          'fichas' => $fichas,
      ));
    }
}
