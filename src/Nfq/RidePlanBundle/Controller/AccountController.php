<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    public function ShowProfileAction()
    {
        return $this->render('RidePlanBundle:Account:ShowProfile.html.twig', array(
                // ...
            ));    }

}
