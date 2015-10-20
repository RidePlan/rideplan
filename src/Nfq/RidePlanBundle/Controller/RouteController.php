<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RouteController extends Controller
{
    public function SuggestAction()
    {
        return $this->render('RidePlanBundle:Route:Suggest.html.twig', array());
    }

    public function SearchAction($query)
    {
        return $this->render('RidePlanBundle:Route:Search.html.twig', array(
            'query' => urldecode($query)
        ));
    }
}
