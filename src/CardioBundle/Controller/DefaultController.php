<?php

namespace CardioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CardioBundle:Default:index.html.twig');
    }
}
