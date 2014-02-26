<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // sil14_vitrine_homepage
        if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil14_vitrine_homepage')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\DefaultController::indexAction',  'name' => 'visiteur',));
        }

        // sil14_vitrine_mentions
        if ($pathinfo === '/mentions') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\DefaultController::mentionsAction',  '_route' => 'sil14_vitrine_mentions',);
        }

        // sil14_vitrine_catalogue
        if ($pathinfo === '/catalogue') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\DefaultController::catalogueAction',  '_route' => 'sil14_vitrine_catalogue',);
        }

        if (0 === strpos($pathinfo, '/produit')) {
            // sil14_vitrine_produitCat
            if (0 === strpos($pathinfo, '/produitCat') && preg_match('#^/produitCat(?:/(?P<idcat>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil14_vitrine_produitCat')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\DefaultController::produitCatAction',  'idcat' => 'listprod',));
            }

            // sil14_vitrine_produit
            if (preg_match('#^/produit(?:/(?P<idprod>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil14_vitrine_produit')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\DefaultController::produitAction',  'idprod' => 'id',));
            }

        }

        // sil14_vitrine_contenuPanier
        if ($pathinfo === '/contenuPanier') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\PanierController::contenuPanierAction',  '_route' => 'sil14_vitrine_contenuPanier',);
        }

        // sil14_vitrine_addPanier
        if (0 === strpos($pathinfo, '/addPanier') && preg_match('#^/addPanier(?:/(?P<id>[^/]++)(?:/(?P<nb>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil14_vitrine_addPanier')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\PanierController::addPanierAction',  'id' => NULL,  'nb' => 1,));
        }

        // sil14_vitrine_delPanier
        if (0 === strpos($pathinfo, '/delPanier') && preg_match('#^/delPanier(?:/(?P<id>[^/]++)(?:/(?P<nb>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil14_vitrine_delPanier')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\PanierController::delPanierAction',  'id' => NULL,  'nb' => 1,));
        }

        // sil14_vitrine_remPanier
        if (0 === strpos($pathinfo, '/remPanier') && preg_match('#^/remPanier(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sil14_vitrine_remPanier')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\PanierController::remPanierAction',  'id' => NULL,));
        }

        // sil14_vitrine_validationPanier
        if ($pathinfo === '/validationPanier') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\PanierController::validationPanierAction',  '_route' => 'sil14_vitrine_validationPanier',);
        }

        // sil14_vitrine_backOffice
        if ($pathinfo === '/backOffice') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\AdminController::adminAccueilAction',  '_route' => 'sil14_vitrine_backOffice',);
        }

        // sil14_vitrine_client
        if ($pathinfo === '/client') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::indexAction',  '_route' => 'sil14_vitrine_client',);
        }

        // sil14_vitrine_product
        if ($pathinfo === '/product') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::indexAction',  '_route' => 'sil14_vitrine_product',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // sil14_vitrine_category
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::indexAction',  '_route' => 'sil14_vitrine_category',);
            }

            // sil14_vitrine_commande
            if ($pathinfo === '/commande') {
                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::indexAction',  '_route' => 'sil14_vitrine_commande',);
            }

        }

        // sil14_vitrine_auth
        if ($pathinfo === '/auth') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\SecurityController::loginAction',  '_route' => 'sil14_vitrine_auth',);
        }

        // sil14_vitrine_mesCommandes
        if ($pathinfo === '/mesCommandes') {
            return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\DefaultController::mesCommandesAction',  '_route' => 'sil14_vitrine_mesCommandes',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client')) {
                // client
                if (rtrim($pathinfo, '/') === '/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::showAction',));
                }

                // client_new
                if ($pathinfo === '/client/new') {
                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }

                // client_create
                if ($pathinfo === '/client/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }

                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::editAction',));
                }

                // client_update
                if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_client_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::updateAction',));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

            }

            if (0 === strpos($pathinfo, '/commande')) {
                // commande
                if (rtrim($pathinfo, '/') === '/commande') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'commande');
                    }

                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande',);
                }

                // commande_show
                if (preg_match('#^/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::showAction',));
                }

                // commande_new
                if ($pathinfo === '/commande/new') {
                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::newAction',  '_route' => 'commande_new',);
                }

                // commande_create
                if ($pathinfo === '/commande/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_commande_create;
                    }

                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::createAction',  '_route' => 'commande_create',);
                }
                not_commande_create:

                // commande_edit
                if (preg_match('#^/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_edit')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::editAction',));
                }

                // commande_update
                if (preg_match('#^/commande/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_commande_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_update')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::updateAction',));
                }
                not_commande_update:

                // commande_delete
                if (preg_match('#^/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_commande_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CommandeController::deleteAction',));
                }
                not_commande_delete:

            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // product
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product');
                }

                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
            }

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::showAction',));
            }

            // product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
            }

            // product_create
            if ($pathinfo === '/product/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_product_create;
                }

                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
            }
            not_product_create:

            // product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::editAction',));
            }

            // product_update
            if (preg_match('#^/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::updateAction',));
            }
            not_product_update:

            // product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\ProductController::deleteAction',));
            }
            not_product_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::showAction',));
            }

            // category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::editAction',));
            }

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        // auth_check
        if ($pathinfo === '/auth_check') {
            return array('_route' => 'auth_check');
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'sil14\\VitrineBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
