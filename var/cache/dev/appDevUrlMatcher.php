<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // publication_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'publication_homepage');
            }

            return array (  '_controller' => 'PublicationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'publication_homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/log')) {
                // publication_user_login
                if ($pathinfo === '/user/loginUser') {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\UserController::loginUserAction',  '_route' => 'publication_user_login',);
                }

                // publication_user_logout
                if ($pathinfo === '/user/logoutUser') {
                    return array (  '_controller' => 'PublicationBundle\\Controller\\UserController::logoutUserAction',  '_route' => 'publication_user_logout',);
                }

            }

            // publication_user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\UserController::addAction',  '_route' => 'publication_user_add',);
            }

            // publication_user_valid
            if ($pathinfo === '/user/valid') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\UserController::validAction',  '_route' => 'publication_user_valid',);
            }

        }

        // publication_hello
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'PublicationBundle\\Controller\\DefaultController::helloAction',  '_route' => 'publication_hello',);
        }

        if (0 === strpos($pathinfo, '/chercheur')) {
            // publication_chercheur
            if ($pathinfo === '/chercheur') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\ChercheurController::indexAction',  '_route' => 'publication_chercheur',);
            }

            // publication_chercheur_view
            if ($pathinfo === '/chercheur/view') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\ChercheurController::viewAction',  '_route' => 'publication_chercheur_view',);
            }

            // publication_chercheur_add
            if ($pathinfo === '/chercheur/add') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\ChercheurController::addAction',  '_route' => 'publication_chercheur_add',);
            }

            // publication_chercheur_valid
            if ($pathinfo === '/chercheur/valid') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\ChercheurController::validAction',  '_route' => 'publication_chercheur_valid',);
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // publication_article_view
            if (0 === strpos($pathinfo, '/article/view') && preg_match('#^/article/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_article_view')), array (  '_controller' => 'PublicationBundle\\Controller\\ArticleController::viewAction',  'id' => 0,));
            }

            // publication_article_add
            if ($pathinfo === '/article/add') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\ArticleController::addAction',  '_route' => 'publication_article_add',);
            }

            // publication_article_valid
            if ($pathinfo === '/article/valid') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\ArticleController::validAction',  '_route' => 'publication_article_valid',);
            }

            if (0 === strpos($pathinfo, '/article/modif')) {
                // publication_article_modif
                if (preg_match('#^/article/modif(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_article_modif')), array (  '_controller' => 'PublicationBundle\\Controller\\ArticleController::modifAction',  'id' => 0,));
                }

                // publication_article_modif_valid
                if (0 === strpos($pathinfo, '/article/modifValid') && preg_match('#^/article/modifValid(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_article_modif_valid')), array (  '_controller' => 'PublicationBundle\\Controller\\ArticleController::modifValidAction',  'id' => 0,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/laboratoire')) {
            // publication_laboratoire_view
            if (0 === strpos($pathinfo, '/laboratoire/view') && preg_match('#^/laboratoire/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_laboratoire_view')), array (  '_controller' => 'PublicationBundle\\Controller\\LaboratoireController::viewAction',  'id' => 0,));
            }

            // publication_laboratoire_add
            if ($pathinfo === '/laboratoire/add') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\LaboratoireController::addAction',  '_route' => 'publication_laboratoire_add',);
            }

        }

        if (0 === strpos($pathinfo, '/organisation')) {
            // publication_organisation_view
            if (0 === strpos($pathinfo, '/organisation/view') && preg_match('#^/organisation/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_organisation_view')), array (  '_controller' => 'PublicationBundle\\Controller\\OrganisationController::viewAction',  'id' => 0,));
            }

            // publication_organisation_add
            if ($pathinfo === '/organisation/add') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\OrganisationController::addAction',  '_route' => 'publication_organisation_add',);
            }

        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // publication_categorie_view
            if (0 === strpos($pathinfo, '/categorie/view') && preg_match('#^/categorie/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_categorie_view')), array (  '_controller' => 'PublicationBundle\\Controller\\CategorieController::viewAction',  'id' => 0,));
            }

            // publication_categorie_add
            if ($pathinfo === '/categorie/add') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\CategorieController::addAction',  '_route' => 'publication_categorie_add',);
            }

        }

        // publication_chercheur_article_view
        if (0 === strpos($pathinfo, '/article/viewByChercheur') && preg_match('#^/article/viewByChercheur(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_chercheur_article_view')), array (  '_controller' => 'PublicationBundle\\Controller\\ArticleController::viewByChercheurAction',  'id' => 0,));
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // publication_recherche
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\RechercheController::indexAction',  '_route' => 'publication_recherche',);
            }

            // publication_recherche_valid
            if ($pathinfo === '/recherche/valid') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\RechercheController::validAction',  '_route' => 'publication_recherche_valid',);
            }

        }

        if (0 === strpos($pathinfo, '/stats')) {
            // publication_statistiques
            if ($pathinfo === '/stats') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\StatistiquesController::indexAction',  '_route' => 'publication_statistiques',);
            }

            // publication_statistiques_get
            if ($pathinfo === '/stats/gets') {
                return array (  '_controller' => 'PublicationBundle\\Controller\\StatistiquesController::getAction',  '_route' => 'publication_statistiques_get',);
            }

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
