<?php

namespace Site\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Site\Bundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CategoriesController extends Controller
{
    /**
     * @Route("/", name="_categories")
     * @Template()
     */
    public function indexAction()
    {
		$repository = $this->getDoctrine()->getRepository('CoreBundle:Category');
		$categories = $repository->findAll();
        return array('categories' => $categories);
    }

    /**
     * @Route("/{cat}", defaults={"cat" = "Alert"}, name="_categories_name")
     * @Template()
     */
    public function categoryAction($cat)
    {
		$repository = $this->getDoctrine()->getRepository('CoreBundle:Category');
		$category = $repository->findOneByName($cat);
		$topics = $category->getTopics();
		return array('category' => $category, 'topics' => $topics);
    }

}
