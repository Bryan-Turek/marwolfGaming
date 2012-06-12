<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_registration' => true,
       '_login' => true,
       '_logout' => true,
       '_topics' => true,
       '_topic_create' => true,
       '_topic_name' => true,
       '_users' => true,
       '_user_name' => true,
       '_categories' => true,
       '_categories_name' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_registrationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function get_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login/',  ),));
    }

    private function get_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\WelcomeController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout/',  ),));
    }

    private function get_topicsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\TopicsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/topics/',  ),));
    }

    private function get_topic_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\TopicsController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/topics/create',  ),));
    }

    private function get_topic_nameRouteInfo()
    {
        return array(array (  0 => 'name',), array (  'id' => 'Testing',  '_controller' => 'Site\\Bundle\\Controller\\TopicsController::topicAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/topics',  ),));
    }

    private function get_usersRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\UsersController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/users/',  ),));
    }

    private function get_user_nameRouteInfo()
    {
        return array(array (  0 => 'user',), array (  'user' => 'electissimi',  '_controller' => 'Site\\Bundle\\Controller\\UsersController::userAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'user',  ),  1 =>   array (    0 => 'text',    1 => '/users',  ),));
    }

    private function get_categoriesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\Bundle\\Controller\\CategoriesController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/categories/',  ),));
    }

    private function get_categories_nameRouteInfo()
    {
        return array(array (  0 => 'cat',), array (  'cat' => 'Alert',  '_controller' => 'Site\\Bundle\\Controller\\CategoriesController::categoryAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'cat',  ),  1 =>   array (    0 => 'text',    1 => '/categories',  ),));
    }
}
