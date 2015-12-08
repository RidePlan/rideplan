<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartPageController extends Controller
{

    public function indexAction()
    {
        return $this->render('RidePlanBundle:StartPage:index.html.twig', array(
              "GreetMessage" => "Welcome to the best bicycle track website"
            ));    }

}
