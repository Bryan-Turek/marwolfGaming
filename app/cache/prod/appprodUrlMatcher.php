<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _registration
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_registration');
            }
            return array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::registerAction',  '_route' => '_registration',);
        }

        // _login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_login');
            }
            return array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::loginAction',  '_route' => '_login',);
        }

        // _logout
        if (rtrim($pathinfo, '/') === '/logout') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_logout');
            }
            return array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::logoutAction',  '_route' => '_logout',);
        }

        if (0 === strpos($pathinfo, '/topics')) {
            // _topics
            if (rtrim($pathinfo, '/') === '/topics') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_topics');
                }
                return array (  '_controller' => 'Site\\Bundle\\Controller\\TopicsController::indexAction',  '_route' => '_topics',);
            }

            // _topic_create
            if ($pathinfo === '/topics/create') {
                return array (  '_controller' => 'Site\\Bundle\\Controller\\TopicsController::createAction',  '_route' => '_topic_create',);
            }

            // _topic_name
            if (preg_match('#^/topics/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  'id' => 'Testing',  '_controller' => 'Site\\Bundle\\Controller\\TopicsController::topicAction',)), array('_route' => '_topic_name'));
            }

        }

        if (0 === strpos($pathinfo, '/users')) {
            // _users
            if (rtrim($pathinfo, '/') === '/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_users');
                }
                return array (  '_controller' => 'Site\\Bundle\\Controller\\UsersController::indexAction',  '_route' => '_users',);
            }

            // _user_name
            if (preg_match('#^/users(?:/(?P<user>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  'user' => 'electissimi',  '_controller' => 'Site\\Bundle\\Controller\\UsersController::userAction',)), array('_route' => '_user_name'));
            }

        }

        if (0 === strpos($pathinfo, '/categories')) {
            // _categories
            if (rtrim($pathinfo, '/') === '/categories') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_categories');
                }
                return array (  '_controller' => 'Site\\Bundle\\Controller\\CategoriesController::indexAction',  '_route' => '_categories',);
            }

            // _categories_name
            if (preg_match('#^/categories(?:/(?P<cat>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  'cat' => 'Alert',  '_controller' => 'Site\\Bundle\\Controller\\CategoriesController::categoryAction',)), array('_route' => '_categories_name'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
