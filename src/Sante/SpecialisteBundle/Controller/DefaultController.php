<?php

namespace Sante\SpecialisteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SanteSpecialisteBundle:Default:index.html.twig');
    }
}
