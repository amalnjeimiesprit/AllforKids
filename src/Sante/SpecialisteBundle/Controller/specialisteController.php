<?php

namespace Sante\SpecialisteBundle\Controller;

use Sante\SpecialisteBundle\Entity\specialiste;
use Sante\SpecialisteBundle\Form\specialisteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class specialisteController extends Controller
{
    public function ajoutAction(Request $request)
    {

        $specialiste= new specialiste();
        $form = $this->createForm(specialisteType::class,$specialiste);


        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($specialiste); // insert into table
            $em->flush(); //executer
            return $this->redirectToRoute('');
        }
        return $this->render('SanteSpecialisteBundle:specialiste:Ajoutspecialiste.html.twig', array( 'f'=>$form->createView()  ));
    }


}
