<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        // new-actu
        if ('/new-actu' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ActualityController::newAction',  '_route' => 'new-actu',);
        }

        if (0 === strpos($pathinfo, '/actu')) {
            // display-actu
            if (preg_match('#^/actu/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'display-actu')), array (  '_controller' => 'AppBundle\\Controller\\ActualityController::displayActu',));
            }

            // comment
            if ('/actu/comment-sent' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::commentAction',  '_route' => 'comment',);
            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
