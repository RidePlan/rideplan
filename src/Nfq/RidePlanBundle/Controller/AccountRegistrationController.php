<?php

namespace Nfq\RidePlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nfq\RidePlanBundle\Form\UserType;
use Nfq\RidePlanBundle\Entity\User;

class AccountRegistrationController extends Controller
{
    public function RegisterAccountAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->add('save', 'submit', array('label' => 'Register'));
        
        $form->handleRequest($request);
        if ($form->isValid()) {
            //save to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('show_profile');
        }
    
        return $this->render('RidePlanBundle:AccountRegistration:RegisterAccount.html.twig', array(
                'form' => $form->createView()
            ));   
    }

}
