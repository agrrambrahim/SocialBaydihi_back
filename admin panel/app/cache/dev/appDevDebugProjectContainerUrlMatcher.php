<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/api/user')) {
            // api_user_register
            if (0 === strpos($pathinfo, '/api/user/register') && preg_match('#^/api/user/register/(?P<token>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_user_register;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_register')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_registerAction',));
            }
            not_api_user_register:

            // api_user_login
            if (0 === strpos($pathinfo, '/api/user/login') && preg_match('#^/api/user/login/(?P<username>[^/]++)/(?P<password>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_login;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_login');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_login')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_loginAction',));
            }
            not_api_user_login:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // user_user_index
            if ($pathinfo === '/users/index.html') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_user_index',);
            }

            // user_user_edit
            if (0 === strpos($pathinfo, '/users/edit') && preg_match('#^/users/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
            }

            // user_user_comment
            if (0 === strpos($pathinfo, '/users/comment') && preg_match('#^/users/comment/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_comment')), array (  '_controller' => 'UserBundle\\Controller\\UserController::commentAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/user')) {
            // api_user_change_password
            if (0 === strpos($pathinfo, '/api/user/password') && preg_match('#^/api/user/password/(?P<id>[^/]++)/(?P<password>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_change_password;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_change_password');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_change_password')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_change_passwordAction',));
            }
            not_api_user_change_password:

            // api_user_edit_name
            if (0 === strpos($pathinfo, '/api/user/name') && preg_match('#^/api/user/name/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_edit_name;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_edit_name');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_edit_name')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_edit_nameAction',));
            }
            not_api_user_edit_name:

            // api_user_email
            if (0 === strpos($pathinfo, '/api/user/email') && preg_match('#^/api/user/email/(?P<email>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_email;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_email');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_email')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_emailAction',));
            }
            not_api_user_email:

            if (0 === strpos($pathinfo, '/api/user/re')) {
                // api_user_request
                if (0 === strpos($pathinfo, '/api/user/request') && preg_match('#^/api/user/request/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_user_request;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_request');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_request')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_requestAction',));
                }
                not_api_user_request:

                // api_user_reset
                if (0 === strpos($pathinfo, '/api/user/reset') && preg_match('#^/api/user/reset/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_user_reset;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_user_reset');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_resetAction',));
                }
                not_api_user_reset:

            }

            // api_user_check
            if (0 === strpos($pathinfo, '/api/user/check') && preg_match('#^/api/user/check/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_check;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_check');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_check')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_checkAction',));
            }
            not_api_user_check:

            // api_user_upload
            if (0 === strpos($pathinfo, '/api/user/upload') && preg_match('#^/api/user/upload/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_user_upload');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_upload')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_uploadAction',));
            }

        }

        // app_home_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_home_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'app_home_index',);
        }

        if (0 === strpos($pathinfo, '/ap')) {
            // api_home_api_device
            if (0 === strpos($pathinfo, '/api/device') && preg_match('#^/api/device/(?P<tkn>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_home_api_device');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_home_api_device')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_deviceAction',));
            }

            if (0 === strpos($pathinfo, '/applications')) {
                // app_applications_index
                if ($pathinfo === '/applications/index.html') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApplicationsController::indexAction',  '_route' => 'app_applications_index',);
                }

                // app_applications_add
                if ($pathinfo === '/applications/add.html') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApplicationsController::addAction',  '_route' => 'app_applications_add',);
                }

                // app_applications_delete
                if (0 === strpos($pathinfo, '/applications/delete') && preg_match('#^/applications/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_applications_delete')), array (  '_controller' => 'AppBundle\\Controller\\ApplicationsController::deleteAction',));
                }

                // app_applications_up
                if (0 === strpos($pathinfo, '/applications/up') && preg_match('#^/applications/up/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_applications_up')), array (  '_controller' => 'AppBundle\\Controller\\ApplicationsController::upAction',));
                }

                // app_applications_down
                if (0 === strpos($pathinfo, '/applications/down') && preg_match('#^/applications/down/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_applications_down')), array (  '_controller' => 'AppBundle\\Controller\\ApplicationsController::downAction',));
                }

                // app_applications_edit
                if (0 === strpos($pathinfo, '/applications/edit') && preg_match('#^/applications/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_applications_edit')), array (  '_controller' => 'AppBundle\\Controller\\ApplicationsController::editAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/categories')) {
            // app_categories_index
            if ($pathinfo === '/categories/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'app_categories_index',);
            }

            // app_categories_add
            if ($pathinfo === '/categories/add.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::addAction',  '_route' => 'app_categories_add',);
            }

            // app_categories_delete
            if (0 === strpos($pathinfo, '/categories/delete') && preg_match('#^/categories/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::deleteAction',));
            }

            // app_categories_up
            if (0 === strpos($pathinfo, '/categories/up') && preg_match('#^/categories/up/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_up')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::upAction',));
            }

            // app_categories_down
            if (0 === strpos($pathinfo, '/categories/down') && preg_match('#^/categories/down/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_down')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::downAction',));
            }

            // app_categories_edit
            if (0 === strpos($pathinfo, '/categories/edit') && preg_match('#^/categories/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_categories_list
            if (0 === strpos($pathinfo, '/api/categories/list') && preg_match('#^/api/categories/list/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_categories_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_list')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::api_listAction',));
            }

            // api_categoriesbyApplication_list
            if (preg_match('#^/api/(?P<packageName>[^/]++)/categories/list/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_categoriesbyApplication_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categoriesbyApplication_list')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::api_by_ApplicationAction',));
            }

            // api_guides_all
            if (preg_match('#^/api/(?P<packageName>[^/]++)/guides/all/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_guides_all');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_guides_all')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::api_allAction',));
            }

        }

        if (0 === strpos($pathinfo, '/guides')) {
            // app_guides_add
            if ($pathinfo === '/guides/add.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\GuidesController::addAction',  '_route' => 'app_guides_add',);
            }

            if (0 === strpos($pathinfo, '/guides/step')) {
                // app_guides_steps
                if (0 === strpos($pathinfo, '/guides/steps') && preg_match('#^/guides/steps/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_guides_steps')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::stepsAction',));
                }

                if (0 === strpos($pathinfo, '/guides/step/delete')) {
                    // app_step_delete_step
                    if (preg_match('#^/guides/step/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_delete_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::delete_stepAction',));
                    }

                    // app_step_delete_edit_step
                    if (0 === strpos($pathinfo, '/guides/step/delete_edit') && preg_match('#^/guides/step/delete_edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_delete_edit_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::delete_step_editAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/guides/step/up')) {
                    // app_step_up_step
                    if (preg_match('#^/guides/step/up/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_up_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::upAction',));
                    }

                    // app_step_up_edit_step
                    if (0 === strpos($pathinfo, '/guides/step/up_edit') && preg_match('#^/guides/step/up_edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_up_edit_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::up_editAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/guides/step/edit')) {
                    // app_step_edit_step_two
                    if (0 === strpos($pathinfo, '/guides/step/edit_two') && preg_match('#^/guides/step/edit_two/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_edit_step_two')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::edit_step_twoAction',));
                    }

                    // app_step_edit_step
                    if (preg_match('#^/guides/step/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_edit_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::edit_stepAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/guides/step/down')) {
                    // app_step_down_step
                    if (preg_match('#^/guides/step/down/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_down_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::downAction',));
                    }

                    // app_step_down_edit_step
                    if (0 === strpos($pathinfo, '/guides/step/down_edit') && preg_match('#^/guides/step/down_edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_step_down_edit_step')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::down_editAction',));
                    }

                }

            }

            // app_guide_finish
            if (0 === strpos($pathinfo, '/guides/finish') && preg_match('#^/guides/finish/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_guide_finish')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::finishAction',));
            }

            // app_guides_index
            if ($pathinfo === '/guides/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\GuidesController::indexAction',  '_route' => 'app_guides_index',);
            }

            // app_guides_view
            if (0 === strpos($pathinfo, '/guides/view') && preg_match('#^/guides/view/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_guides_view')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::viewAction',));
            }

            // app_guides_notif
            if (0 === strpos($pathinfo, '/guides/notif') && preg_match('#^/guides/notif/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_guides_notif')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::notifAction',));
            }

            // app_guides_edit
            if (0 === strpos($pathinfo, '/guides/edit') && preg_match('#^/guides/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_guides_edit')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::editAction',));
            }

            // app_guides_delete
            if (0 === strpos($pathinfo, '/guides/delete') && preg_match('#^/guides/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_guides_delete')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/guides')) {
            // api_guides_get
            if (0 === strpos($pathinfo, '/api/guides/get') && preg_match('#^/api/guides/get/(?P<id>\\d+)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_guides_get');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_guides_get')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::api_getAction',));
            }

            // api_guides_next
            if (0 === strpos($pathinfo, '/api/guides/next') && preg_match('#^/api/guides/next/(?P<id>\\d+)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_guides_next');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_guides_next')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::api_nextAction',));
            }

            // api_guides_by_category
            if (0 === strpos($pathinfo, '/api/guides/by') && preg_match('#^/api/guides/by/(?P<category>\\d+)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_guides_by_category');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_guides_by_category')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::api_by_categoryAction',));
            }

            // api_guides_by_query
            if (0 === strpos($pathinfo, '/api/guides/search') && preg_match('#^/api/guides/search/(?P<query>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_guides_by_query');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_guides_by_query')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::api_by_queryAction',));
            }

            // api_guides_by_category_next
            if (0 === strpos($pathinfo, '/api/guides/next') && preg_match('#^/api/guides/next/(?P<category>\\d+)/(?P<id>\\d+)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_guides_by_category_next');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_guides_by_category_next')), array (  '_controller' => 'AppBundle\\Controller\\GuidesController::api_by_category_nextAction',));
            }

        }

        if (0 === strpos($pathinfo, '/videos')) {
            // app_videos_notif
            if (0 === strpos($pathinfo, '/videos/notif') && preg_match('#^/videos/notif/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_notif')), array (  '_controller' => 'AppBundle:Videos:notif',));
            }

            // app_videos_add
            if ($pathinfo === '/videos/add.html') {
                return array (  '_controller' => 'AppBundle:Videos:add',  '_route' => 'app_videos_add',);
            }

            // app_videos_index
            if ($pathinfo === '/videos/index.html') {
                return array (  '_controller' => 'AppBundle:Videos:index',  '_route' => 'app_videos_index',);
            }

            // app_videos_view
            if (0 === strpos($pathinfo, '/videos/view') && preg_match('#^/videos/view/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_view')), array (  '_controller' => 'AppBundle:Videos:view',));
            }

            // app_videos_edit
            if (0 === strpos($pathinfo, '/videos/edit') && preg_match('#^/videos/edit/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_edit')), array (  '_controller' => 'AppBundle:Videos:edit',));
            }

            // app_videos_delete
            if (0 === strpos($pathinfo, '/videos/delete') && preg_match('#^/videos/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_delete')), array (  '_controller' => 'AppBundle:Videos:delete',));
            }

        }

        if (0 === strpos($pathinfo, '/comments')) {
            if (0 === strpos($pathinfo, '/comments/delete')) {
                // app_comments_delete
                if (preg_match('#^/comments/delete/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::deleteAction',));
                }

                // app_comments_delete_two
                if (0 === strpos($pathinfo, '/comments/delete_two') && preg_match('#^/comments/delete_two/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_delete_two')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::delete_twoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/comments/hide')) {
                // app_comments_hide
                if (preg_match('#^/comments/hide/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_hide')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::hideAction',));
                }

                // app_comments_hide_two
                if (0 === strpos($pathinfo, '/comments/hide_two') && preg_match('#^/comments/hide_two/(?P<id>\\d+)\\.html$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_hide_two')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::hide_twoAction',));
                }

            }

            // app_comments_index
            if ($pathinfo === '/comments/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentsController::indexAction',  '_route' => 'app_comments_index',);
            }

        }

        if (0 === strpos($pathinfo, '/api/comments')) {
            // api_comments_add
            if (0 === strpos($pathinfo, '/api/comments/add') && preg_match('#^/api/comments/add/(?P<user>[^/]++)/(?P<article>[^/]++)/(?P<comment>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_comments_add');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comments_add')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::api_addAction',));
            }

            // api_comments_by
            if (0 === strpos($pathinfo, '/api/comments/by') && preg_match('#^/api/comments/by/(?P<article>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_comments_by');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comments_by')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::api_byAction',));
            }

        }

        if (0 === strpos($pathinfo, '/support')) {
            // app_support_index
            if ($pathinfo === '/support/index.html') {
                return array (  '_controller' => 'AppBundle\\Controller\\SupportController::indexAction',  '_route' => 'app_support_index',);
            }

            // app_support_view
            if (0 === strpos($pathinfo, '/support/view') && preg_match('#^/support/view/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_support_view')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::viewAction',));
            }

            // app_support_delete
            if (0 === strpos($pathinfo, '/support/delete') && preg_match('#^/support/delete/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_support_delete')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::deleteAction',));
            }

        }

        // api_support_add
        if (0 === strpos($pathinfo, '/api/support/add') && preg_match('#^/api/support/add/(?P<email>[^/]++)/(?P<subject>[^/]++)/(?P<message>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api_support_add');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_support_add')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::api_addAction',));
        }

        if (0 === strpos($pathinfo, '/medias')) {
            // media_index
            if (rtrim($pathinfo, '/') === '/medias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media_index');
                }

                return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
            }

            // media_add
            if ($pathinfo === '/medias/add') {
                return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::addAction',  '_route' => 'media_add',);
            }

            // media_delete
            if (0 === strpos($pathinfo, '/medias/delete') && preg_match('#^/medias/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/medias')) {
            // api_media_delete
            if (0 === strpos($pathinfo, '/api/medias/delete') && preg_match('#^/api/medias/delete/(?P<id>[^/]++)/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_media_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_media_delete')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_deleteAction',));
            }

            // media_api_upload
            if (0 === strpos($pathinfo, '/api/medias/upload') && preg_match('#^/api/medias/upload/(?P<token>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media_api_upload');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_api_upload')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_uploadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
