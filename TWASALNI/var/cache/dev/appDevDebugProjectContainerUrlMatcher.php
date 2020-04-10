<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/feedback')) {
            // feed_back_homepage
            if ('/feedback' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::AddReclammationAction',  '_route' => 'feed_back_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_feed_back_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'feed_back_homepage'));
                }

                return $ret;
            }
            not_feed_back_homepage:

            if (0 === strpos($pathinfo, '/feedback/reclammation')) {
                if (0 === strpos($pathinfo, '/feedback/reclammation/liste')) {
                    // feed_back_Listereclammation
                    if ('/feedback/reclammation/liste' === $pathinfo) {
                        return array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::ListeReclammationAction',  '_route' => 'feed_back_Listereclammation',);
                    }

                    // feed_back_ordre_croissant
                    if ('/feedback/reclammation/listeC' === $pathinfo) {
                        return array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::OrdreCroissantAction',  '_route' => 'feed_back_ordre_croissant',);
                    }

                    // feed_back_ordre_decroissant
                    if ('/feedback/reclammation/listeD' === $pathinfo) {
                        return array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::OrdreDecroissantAction',  '_route' => 'feed_back_ordre_decroissant',);
                    }

                }

                // feed_back_delete_reclammation
                if (0 === strpos($pathinfo, '/feedback/reclammation/delete') && preg_match('#^/feedback/reclammation/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_delete_reclammation']), array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::DeleteReclammationAction',));
                }

                // feed_back_reponse_reclammation
                if (0 === strpos($pathinfo, '/feedback/reclammation/reponse') && preg_match('#^/feedback/reclammation/reponse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_reponse_reclammation']), array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::ReponseReclammationAction',));
                }

                // feed_back_envoyer_reponse
                if (0 === strpos($pathinfo, '/feedback/reclammation/enoieReponse') && preg_match('#^/feedback/reclammation/enoieReponse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_envoyer_reponse']), array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::EnvoyerRenponseAction',));
                }

                // feed_back_tri_reclammation
                if (0 === strpos($pathinfo, '/feedback/reclammation/TrierParEtat') && preg_match('#^/feedback/reclammation/TrierParEtat/(?P<etat>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_tri_reclammation']), array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::TrierParEtatAction',));
                }

                // feed_back_reclammation_etat
                if ('/feedback/reclammation/trietat' === $pathinfo) {
                    return array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::TrierParEtatAction',  '_route' => 'feed_back_reclammation_etat',);
                }

            }

            elseif (0 === strpos($pathinfo, '/feedback/rating')) {
                // feed_back_liste_rating
                if ('/feedback/rating/liste' === $pathinfo) {
                    return array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::ListeEvaluationAction',  '_route' => 'feed_back_liste_rating',);
                }

                // feed_back_delete_commentaire
                if (0 === strpos($pathinfo, '/feedback/rating/commentaire/delete') && preg_match('#^/feedback/rating/commentaire/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_delete_commentaire']), array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::DeleteCommentaireAction',));
                }

                // feed_back_delete_rate
                if (0 === strpos($pathinfo, '/feedback/rating/rate/delete') && preg_match('#^/feedback/rating/rate/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_delete_rate']), array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::DeleteRateAction',));
                }

                // feed_back_rate_star
                if ('/feedback/rating/trie' === $pathinfo) {
                    return array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::FindByStarAction',  '_route' => 'feed_back_rate_star',);
                }

            }

            // feed_back_statistiques
            if ('/feedback/statistique' === $pathinfo) {
                return array (  '_controller' => 'FeedBackBundle\\Controller\\DefaultController::StatistiquesAction',  '_route' => 'feed_back_statistiques',);
            }

            // feed_back_taxi
            if ('/feedback/taxi/liste' === $pathinfo) {
                return array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::listeTaxiAction',  '_route' => 'feed_back_taxi',);
            }

            // feed_back_detail_taxi
            if (0 === strpos($pathinfo, '/feedback/taxi/detail') && preg_match('#^/feedback/taxi/detail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_detail_taxi']), array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::DetailTaxiAction',));
            }

            // feed_back_evaluer
            if (0 === strpos($pathinfo, '/feedback/evaluer') && preg_match('#^/feedback/evaluer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_evaluer']), array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::EvaluationAction',));
            }

            // feed_back_commenter_part
            if (0 === strpos($pathinfo, '/feedback/commenter') && preg_match('#^/feedback/commenter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'feed_back_commenter_part']), array (  '_controller' => 'FeedBackBundle\\Controller\\RatingController::CommenterAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ('/admin/index' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_testpage
            if ('/admin/test' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::testAction',  '_route' => 'admin_testpage',);
            }

            if (0 === strpos($pathinfo, '/admin/taxi')) {
                if (0 === strpos($pathinfo, '/admin/taxi/taxi')) {
                    // taxi_index
                    if ('/admin/taxi/taxi' === $pathinfo) {
                        $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::indexAction',  '_route' => 'taxi_index',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_taxi_index;
                        }

                        return $ret;
                    }
                    not_taxi_index:

                    // taxi_indexFront
                    if ('/admin/taxi/taxiFront' === $pathinfo) {
                        $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::indexFrontAction',  '_route' => 'taxi_indexFront',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_taxi_indexFront;
                        }

                        return $ret;
                    }
                    not_taxi_indexFront:

                    // taxi_detailTaxi
                    if (0 === strpos($pathinfo, '/admin/taxi/taxi/detail') && preg_match('#^/admin/taxi/taxi/detail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_detailTaxi']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::detailTaxiFrontAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_taxi_detailTaxi;
                        }

                        return $ret;
                    }
                    not_taxi_detailTaxi:

                }

                // taxi_show
                if (preg_match('#^/admin/taxi/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_show']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_taxi_show;
                    }

                    return $ret;
                }
                not_taxi_show:

                // taxi_new
                if ('/admin/taxi/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::newAction',  '_route' => 'taxi_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_taxi_new;
                    }

                    return $ret;
                }
                not_taxi_new:

                // taxi_edit
                if (preg_match('#^/admin/taxi/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_edit']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_taxi_edit;
                    }

                    return $ret;
                }
                not_taxi_edit:

                // taxi_delete
                if (preg_match('#^/admin/taxi/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_delete']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\TaxiController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_taxi_delete;
                    }

                    return $ret;
                }
                not_taxi_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/reservation')) {
                // reservation_index
                if ('/admin/reservation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_reservation_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reservation_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_index;
                    }

                    return $ret;
                }
                not_reservation_index:

                // reservation_archive
                if ('/admin/reservation/archive' === $pathinfo) {
                    $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::listarchiveAction',  '_route' => 'reservation_archive',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_archive;
                    }

                    return $ret;
                }
                not_reservation_archive:

                // reservation_show
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_show']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_show;
                    }

                    return $ret;
                }
                not_reservation_show:

                // reservation_showarchive
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/showarchive$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_showarchive']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::showarchiveAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_showarchive;
                    }

                    return $ret;
                }
                not_reservation_showarchive:

                // reservation_edit
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_edit']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_reservation_edit;
                    }

                    return $ret;
                }
                not_reservation_edit:

                // reservation_delete
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_delete']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::deleteAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_delete;
                    }

                    return $ret;
                }
                not_reservation_delete:

                // reservation_rejet
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/rejet$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_rejet']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::rejetAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_rejet;
                    }

                    return $ret;
                }
                not_reservation_rejet:

                // reservation_archiver
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/archiver$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_archiver']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::archiveAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_archiver;
                    }

                    return $ret;
                }
                not_reservation_archiver:

                // reservation_restaurer
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/restaurer$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_restaurer']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::restoreAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_restaurer;
                    }

                    return $ret;
                }
                not_reservation_restaurer:

            }

            elseif (0 === strpos($pathinfo, '/admin/read')) {
                // course_read
                if ('/admin/readCourses' === $pathinfo) {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CoursesController::readAction',  '_route' => 'course_read',);
                }

                if (0 === strpos($pathinfo, '/admin/readCommission')) {
                    // commission_read
                    if (preg_match('#^/admin/readCommission/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'commission_read']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommissionController::readAction',));
                    }

                    // commissionR_read
                    if (0 === strpos($pathinfo, '/admin/readCommissionR') && preg_match('#^/admin/readCommissionR/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'commissionR_read']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommissionRController::readAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/readInventaire')) {
                    // inventaire_read
                    if ('/admin/readInventaire' === $pathinfo) {
                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireController::readAction',  '_route' => 'inventaire_read',);
                    }

                    // inventaire_readArchive
                    if ('/admin/readInventaireArchive' === $pathinfo) {
                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireController::archiveAction',  '_route' => 'inventaire_readArchive',);
                    }

                    if (0 === strpos($pathinfo, '/admin/readInventaireR')) {
                        // inventaire_readArchivereservation
                        if ('/admin/readInventaireReservationArchive' === $pathinfo) {
                            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireRController::archiveAction',  '_route' => 'inventaire_readArchivereservation',);
                        }

                        // inventaireR_read
                        if ('/admin/readInventaireR' === $pathinfo) {
                            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireRController::readAction',  '_route' => 'inventaireR_read',);
                        }

                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/partenaire')) {
                    // admin_partenaire_index
                    if ('/admin/partenaire/partenaire' === $pathinfo) {
                        $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::indexAction',  '_route' => 'admin_partenaire_index',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_admin_partenaire_index;
                        }

                        return $ret;
                    }
                    not_admin_partenaire_index:

                    // partenaire_show
                    if (preg_match('#^/admin/partenaire/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'partenaire_show']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_partenaire_show;
                        }

                        return $ret;
                    }
                    not_partenaire_show:

                    // partenaire_new
                    if ('/admin/partenaire/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::newAction',  '_route' => 'partenaire_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_partenaire_new;
                        }

                        return $ret;
                    }
                    not_partenaire_new:

                    // partenaire_edit
                    if (preg_match('#^/admin/partenaire/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'partenaire_edit']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_partenaire_edit;
                        }

                        return $ret;
                    }
                    not_partenaire_edit:

                    // partenaire_delete
                    if (preg_match('#^/admin/partenaire/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'partenaire_delete']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_partenaire_delete;
                        }

                        return $ret;
                    }
                    not_partenaire_delete:

                    // partenaire_mdp
                    if (preg_match('#^/admin/partenaire/(?P<id>[^/]++)/mdp$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'partenaire_mdp']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::changeMdpAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_partenaire_mdp;
                        }

                        return $ret;
                    }
                    not_partenaire_mdp:

                    // partenaire_liste_Front
                    if ('/admin/partenaire/liste' === $pathinfo) {
                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::ListeFrontAction',  '_route' => 'partenaire_liste_Front',);
                    }

                    // partenaire_detail
                    if (0 === strpos($pathinfo, '/admin/partenaire/partenaire') && preg_match('#^/admin/partenaire/partenaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'partenaire_detail']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::DetailPartenaireAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/payerInventaire')) {
                    // inventaire_done
                    if (preg_match('#^/admin/payerInventaire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'inventaire_done']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireRController::doneAction',));
                    }

                    // inventaire_paye
                    if (0 === strpos($pathinfo, '/admin/payerInventaires') && preg_match('#^/admin/payerInventaires/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'inventaire_paye']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireController::payerAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/pdfComm')) {
                    // comission_pdf
                    if (0 === strpos($pathinfo, '/admin/pdfCommission') && preg_match('#^/admin/pdfCommission/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'comission_pdf']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommissionController::pdfAction',));
                    }

                    // commissionR_pdf
                    if (preg_match('#^/admin/pdfComm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'commissionR_pdf']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CommissionRController::pdfAction',));
                    }

                }

            }

            // course_delete
            if (0 === strpos($pathinfo, '/admin/deleteCourse') && preg_match('#^/admin/deleteCourse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'course_delete']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CoursesController::deleteAction',));
            }

            // course_update
            if (0 === strpos($pathinfo, '/admin/updateCourse') && preg_match('#^/admin/updateCourse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'course_update']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CoursesController::updateAction',));
            }

            if (0 === strpos($pathinfo, '/admin/nonpayerInventaire')) {
                // inventaire_notdone
                if (preg_match('#^/admin/nonpayerInventaire/(?P<id>[^/]++)/(?P<partenaire_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'inventaire_notdone']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireRController::NotdoneAction',));
                }

                // inventaire_nonpaye
                if (0 === strpos($pathinfo, '/admin/nonpayerInventaires') && preg_match('#^/admin/nonpayerInventaires/(?P<id>[^/]++)/(?P<partenaire_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'inventaire_nonpaye']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\InventaireController::nonpayerAction',));
                }

            }

            // changer_mdp
            if (0 === strpos($pathinfo, '/admin/changermdp') && preg_match('#^/admin/changermdp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'changer_mdp']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::rendermdpAction',));
            }

            // confirm_mdp
            if (0 === strpos($pathinfo, '/admin/confirmmdp') && preg_match('#^/admin/confirmmdp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'confirm_mdp']), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\PartenaireController::changermdpAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/abonnement')) {
            // abonnement_homepage
            if ('/abonnement' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AbonnementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'abonnement_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_abonnement_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'abonnement_homepage'));
                }

                return $ret;
            }
            not_abonnement_homepage:

            // _create_abonnement
            if ('/abonnement/CreateAbonnement' === $pathinfo) {
                return array (  '_controller' => 'AbonnementBundle\\Controller\\AbonnementController::CreateAbonnementAction',  '_route' => '_create_abonnement',);
            }

            // _create_promotion
            if ('/abonnement/CreatePromotion' === $pathinfo) {
                return array (  '_controller' => 'AbonnementBundle\\Controller\\PromotionController::CreatePromotionAction',  '_route' => '_create_promotion',);
            }

            // _read_abonnement
            if ('/abonnement/ReadAbonnement' === $pathinfo) {
                return array (  '_controller' => 'AbonnementBundle\\Controller\\AbonnementController::ReadAbonnementAction',  '_route' => '_read_abonnement',);
            }

            // _read_promotion
            if ('/abonnement/ReadPromotion' === $pathinfo) {
                return array (  '_controller' => 'AbonnementBundle\\Controller\\PromotionController::ReadPromotionAction',  '_route' => '_read_promotion',);
            }

            // _update_abonnement
            if (0 === strpos($pathinfo, '/abonnement/UpdateAbonnement') && preg_match('#^/abonnement/UpdateAbonnement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_update_abonnement']), array (  '_controller' => 'AbonnementBundle\\Controller\\AbonnementController::UpdateAbonnementAction',));
            }

            // _update_promotion
            if (0 === strpos($pathinfo, '/abonnement/UpdatePromotion') && preg_match('#^/abonnement/UpdatePromotion/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_update_promotion']), array (  '_controller' => 'AbonnementBundle\\Controller\\PromotionController::UpdatePromotionAction',));
            }

            // _delete_abonnement
            if (0 === strpos($pathinfo, '/abonnement/DeleteAbonnement') && preg_match('#^/abonnement/DeleteAbonnement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_delete_abonnement']), array (  '_controller' => 'AbonnementBundle\\Controller\\AbonnementController::DeleteAbonnementAction',));
            }

            // _delete_promotion
            if (0 === strpos($pathinfo, '/abonnement/DeletePromotion') && preg_match('#^/abonnement/DeletePromotion/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_delete_promotion']), array (  '_controller' => 'AbonnementBundle\\Controller\\PromotionController::DeletePromotionAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // reservation_new
            if ('/reservation/new' === $pathinfo) {
                $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_reservation_new;
                }

                return $ret;
            }
            not_reservation_new:

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        // utilisateurs_utilisateurs_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\DefaultController::indexAction',  '_route' => 'utilisateurs_utilisateurs_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_utilisateurs_utilisateurs_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'utilisateurs_utilisateurs_homepage'));
            }

            return $ret;
        }
        not_utilisateurs_utilisateurs_homepage:

        // course_create
        if ('/createCourse' === $pathinfo) {
            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\CoursesController::createAction',  '_route' => 'course_create',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/message')) {
            // fos_message_inbox
            if ('/message' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_message_inbox;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_message_inbox'));
                }

                return $ret;
            }
            not_fos_message_inbox:

            // fos_message_sent
            if ('/message/sent' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_search
            if ('/message/search' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_deleted
            if ('/message/deleted' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_thread_new
            if ('/message/new' === $pathinfo) {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/message/(?P<threadId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_delete']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
                if (!in_array($requestMethod, ['POST', 'DELETE'])) {
                    $allow = array_merge($allow, ['POST', 'DELETE']);
                    goto not_fos_message_thread_delete;
                }

                return $ret;
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/message/(?P<threadId>[^/]++)/undelete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_undelete']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_message_thread_undelete;
                }

                return $ret;
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/message/(?P<threadId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_view']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
