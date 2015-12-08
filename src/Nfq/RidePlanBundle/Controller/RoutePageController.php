<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoutePageController extends Controller
{
    public function showAction($routeId)
    {
        return $this->render('RidePlanBundle:RoutePage:show.html.twig', array(
                "Route" => $routeId
            ));    }

}
