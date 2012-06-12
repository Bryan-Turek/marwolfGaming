<?php

namespace Site\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Site\Bundle\Entity\Post;
use Site\Bundle\Entity\Topic;
use Site\Bundle\Form\CreateTopicType;

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
		$topics = $repository->findAllOrderedByRank();
        return array('topics' => $topics);
    }

    /**
     * @Route("/create", name="_topic_create")
     * @Template()
     */
    public function createAction(Request $request)
    {
		
		$session = $this->getRequest()->getSession();
		
		//if not logged in redirect to login page.
		if(!$session->get('logged_in')) {
			return $this->redirect($this->generateUrl('_login'));
		}
	
		$post = new Post();
		$topic = new Topic();
		$post->setTopic($topic);
	
		echo $topic->getId();
	
		$subject = $this->createForm(new CreateTopicType(), $post);

		if ($request->getMethod() == 'POST') {
			$subject->bindRequest($request);

			if ($subject->isValid()) {
				
				//set topic and post data
				$topic->setDate(new \DateTime());
				$post->setPosted(new \DateTime());
				
				//set session logged in = true, get user id
				$user_id = $session->get('user_id');
				$user = $this->getDoctrine()->getRepository('CoreBundle:User')->findOneById($user_id);
				
				//set author
				$topic->setAuthor($user_id);
				$post->setAuthor($user);
				
				//enter into the database
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($post);
				$em->persist($topic);
				$em->flush();
				
				$path = $topic->getId() .'-'. str_replace(" ", "-", strtolower($topic->getSubject()));
				return $this->redirect($this->generateUrl('_topics') . $path);
			}
		}
		
		return array('subject' => $subject->createView());
    }

    /**
     * @Route("/{name}", defaults={"id" = "Testing"}, name="_topic_name")
     * @Template()
     */
    public function topicAction($name)
    {
		$arr = explode('-',$name);
		$id = intval($arr[0]);
		$repository = $this->getDoctrine()->getRepository('CoreBundle:Topic');
		$topic = $repository->findOneById($id);
		$posts = $topic->getPosts();
		return array('topic' => $topic, 'posts' => $posts);
    }
}
