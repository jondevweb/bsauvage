<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/beer' => [[['_route' => 'app_admin_beer', '_controller' => 'App\\Controller\\Admin\\BeerController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/contact' => [[['_route' => 'app_admin_contact', '_controller' => 'App\\Controller\\Admin\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/order' => [[['_route' => 'app_admin_order', '_controller' => 'App\\Controller\\Admin\\OrderController::index'], null, null, null, false, false, null]],
        '/beer' => [[['_route' => 'app_beer', '_controller' => 'App\\Controller\\BeerController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/brasserie' => [[['_route' => 'app_brasserie', '_controller' => 'App\\Controller\\BrasserieController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/default' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/engage' => [[['_route' => 'app_engage', '_controller' => 'App\\Controller\\EngageController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mentions' => [[['_route' => 'app_mentions', '_controller' => 'App\\Controller\\HomeController::mentions'], null, ['GET' => 0], null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\ShopController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\ShopController::success'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ShopController::error'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin(?'
                    .'|/(?'
                        .'|beer/(?'
                            .'|edit/(?'
                                .'|category/([^/]++)(*:215)'
                                .'|([^/]++)(*:231)'
                            .')'
                            .'|delete/(?'
                                .'|category/([^/]++)(*:267)'
                                .'|([^/]++)(*:283)'
                            .')'
                        .')'
                        .'|contact/(?'
                            .'|modif/([^/]++)/([^/]++)(*:327)'
                            .'|delete/([^/]++)(*:350)'
                        .')'
                        .'|details/order/([0-9]+)(*:381)'
                    .')'
                    .'|projet/delete/([^/]++)(*:412)'
                .')'
                .'|/beer/([0-9]+)(*:435)'
                .'|/orders/([^/]++)(*:459)'
                .'|/edituser/([0-9]+)(*:485)'
                .'|/details/([0-9]+)(*:510)'
                .'|/shop/order/([^/]++)(*:538)'
                .'|/create\\-checkout\\-session/([^/]++)(*:581)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => 'app_admin_category_modif', '_controller' => 'App\\Controller\\Admin\\BeerController::categoryModif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        231 => [[['_route' => 'app_admin_beer_modif', '_controller' => 'App\\Controller\\Admin\\BeerController::beerModif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        267 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\BeerController::categoryDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        283 => [[['_route' => 'app_admin_beer_delete', '_controller' => 'App\\Controller\\Admin\\BeerController::beerDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        327 => [[['_route' => 'app_admin_contact_modif_check', '_controller' => 'App\\Controller\\Admin\\ContactController::contactCheck'], ['id', 'check'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        350 => [[['_route' => 'app_admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\ContactController::contactDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        381 => [[['_route' => 'app_admin_details_order', '_controller' => 'App\\Controller\\Admin\\OrderController::detailsOrder'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        412 => [[['_route' => 'app_admin_projet_delete', '_controller' => 'App\\Controller\\Admin\\ContactController::projetDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        435 => [[['_route' => 'app_beer_favoris', '_controller' => 'App\\Controller\\BeerController::favoris'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        459 => [[['_route' => 'app_profil_orders', '_controller' => 'App\\Controller\\ProfilController::orders'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        485 => [[['_route' => 'app_profil_edituser', '_controller' => 'App\\Controller\\ProfilController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        510 => [[['_route' => 'app_details_order', '_controller' => 'App\\Controller\\ProfilController::details'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        538 => [[['_route' => 'app_shop_order', '_controller' => 'App\\Controller\\ShopController::goShop'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        581 => [
            [['_route' => 'app_checkout', '_controller' => 'App\\Controller\\ShopController::checkout'], ['ssd'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
