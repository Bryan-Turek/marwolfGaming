<?php

namespace Site\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Welcome:index.html.twig');
    }
}
