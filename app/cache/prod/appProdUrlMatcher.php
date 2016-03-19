<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/job')) {
            // imie_job_index
            if (rtrim($pathinfo, '/') === '/job') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_imie_job_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'imie_job_index');
                }

                return array (  '_controller' => 'Imie\\TotoBundle\\Controller\\JobController::indexAction',  '_route' => 'imie_job_index',);
            }
            not_imie_job_index:

            // imie_job_new
            if ($pathinfo === '/job/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_imie_job_new;
                }

                return array (  '_controller' => 'Imie\\TotoBundle\\Controller\\JobController::newAction',  '_route' => 'imie_job_new',);
            }
            not_imie_job_new:

            // imie_job_show
            if (preg_match('#^/job/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_imie_job_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_job_show')), array (  '_controller' => 'Imie\\TotoBundle\\Controller\\JobController::showAction',));
            }
            not_imie_job_show:

            // imie_job_edit
            if (preg_match('#^/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_imie_job_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_job_edit')), array (  '_controller' => 'Imie\\TotoBundle\\Controller\\JobController::editAction',));
            }
            not_imie_job_edit:

            // imie_job_delete
            if (preg_match('#^/job/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_imie_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_job_delete')), array (  '_controller' => 'Imie\\TotoBundle\\Controller\\JobController::deleteAction',));
            }
            not_imie_job_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
