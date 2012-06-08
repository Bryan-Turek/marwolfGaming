<?php

namespace Site\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Site\Bundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UsersController extends Controller
{
    /**
     * @Route("/", name="_users")
     * @Template()
     */
    public function indexAction()
    {
		$repository = $this->getDoctrine()->getRepository('CoreBundle:User');
		$users = $repository->findAll();
        return array('users' => $users);
    }

    /**
     * @Route("/{user}", defaults={"user" = "electissimi"}, name="_user_name")
     * @Template()
     */
    public function userAction($user)
    {
		$repository = $this->getDoctrine()->getRepository('CoreBundle:User');
		$user = $repository->findOneByName($user);
		return array('user' => $user);
    }

}
