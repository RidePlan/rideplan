<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountRegistrationController extends Controller
{
    public function RegisterAccountAction()
    {
        return $this->render('RidePlanBundle:AccountRegistration:RegisterAccount.html.twig', array(
                // ...
            ));    }

}
