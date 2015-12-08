<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RidePlanBundle:Default:index.html.twig', array('name' => $name));
    }
}
