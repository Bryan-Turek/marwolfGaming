<?php

namespace Site\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Site\Bundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TopicsController extends Controller
{
    /**
     * @Route("/", name="_topics")
     * @Template()
     */
    public function indexAction()
    {
		$repository = $this->getDoctrine()->getRepository('CoreBundle:Topic');
		$topics = $repository->findAll();
        return array('topics' => $topics);
    }

    /**
     * @Route("/{id}", defaults={"id" = 1}, name="_topic_name")
     * @Template()
     */
    public function topicAction($id)
    {
		$repository = $this->getDoctrine()->getRepository('CoreBundle:Topic');
		$topic = $repository->findOneById($id);
		$posts = $topic->getPosts();
		return array('name' => $topic, 'posts' => $posts);
    }

    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction()
    {
        $form = $this->get('form.factory')->create(new ContactType());

        $request = $this->get('request');
        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $mailer = $this->get('mailer');
                // .. setup a message and send it
                // http://symfony.com/doc/current/cookbook/email.html

                $this->get('session')->setFlash('notice', 'Message sent!');

                return new RedirectResponse($this->generateUrl('_demo'));
            }
        }

        return array('form' => $form->createView());
    }
}
