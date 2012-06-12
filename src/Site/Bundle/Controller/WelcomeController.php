<?php

namespace Site\Bundle\Controller;

use Site\Bundle\Entity\User;
use Site\Bundle\Form\RegistrationType;
use Site\Bundle\Form\LoginType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Welcome:index.html.twig');
    }
	
	/**
     * @Route("/register", name="_registration")
     * @Template()
     */
	 public function registerAction(Request $request)
	 {
		$user = new User();
		$registration = $this->createForm(new RegistrationType(), $user);
		
		if ($request->getMethod() == 'POST') {
			$registration->bindRequest($request);

			if ($registration->isValid()) {
			
				$factory = $this->get('security.encoder_factory');

				$encoder = $factory->getEncoder($user);
				$password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
			
				//set user info
				$user->setRank(1);
				$user->setActive(true);
				$user->setPassword($password);
				$user->setSalt();
				
				
				//set registration date
				$user->setRegistered(new \DateTime());
				
				//enter into the database
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($user);
				$em->flush();
				
				//set session logged in = true, and username to user's username
				$session = $this->getRequest()->getSession();
				$session->set('logged_in', true);
				$session->set('username', $user->getName());
				$session->set('user_id', $user->getId());
				
				return $this->redirect($this->generateUrl('_users') . $user->getName());
			}
		}
		
		return array('registration' => $registration->createView());
	 }
	 
	 /**
     * @Route("/login", name="_login")
     * @Template()
     */
	 public function loginAction(Request $request)
	 {
		$user = new User();
		$login = $this->createForm(new LoginType(), $user);
		
		if ($request->getMethod() == 'POST') {
			$login->bindRequest($request);

			if ($login->isValid()) {
				//get encoder
				$factory = $this->get('security.encoder_factory');
				$encoder = $factory->getEncoder($user);
				
				//get check user
				$repository = $this->getDoctrine()->getRepository('CoreBundle:User');
				$check_user = $repository->findOneBy(array('name' => $user->getName()));
				
				//get encoded password
				$password = $encoder->encodePassword($user->getPassword(), $check_user->getSalt());
				
				//check password against $check-user's password
				if($check_user->getPassword() == $password) {
					//set session logged in = true
					$session = $this->getRequest()->getSession();
					$session->set('logged_in', true);
					$session->set('username', $check_user->getName());
					$session->set('user_id', $check_user->getId());
					
					return $this->redirect($this->generateUrl('_welcome'));
				} else {
					return $this->redirect($this->generateUrl('_welcome'));
				}
				
			}
		}
		
		return array('login' => $login->createView());
	 }
	 
	 /**
     * @Route("/logout", name="_logout")
     * @Template()
     */
	 public function logoutAction()
	 {
		//set session logged in = false
		$session = $this->getRequest()->getSession();
		$session->set('logged_in', false);
		
		return $this->redirect($this->generateUrl('_welcome'));
	 }
	 
}
