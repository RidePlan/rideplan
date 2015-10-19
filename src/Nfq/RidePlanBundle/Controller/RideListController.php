<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RideListController extends Controller
{
    public function listAction()
    {
        return $this->render('RidePlanBundle:RideList:list.html.twig', array(
                // ...
            ));    }

}
