<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin(?'
                    .'|/(?'
                        .'|beer/(?'
                            .'|edit/(?'
                                .'|category/([^/]++)(*:53)'
                                .'|([^/]++)(*:68)'
                            .')'
                            .'|delete/(?'
                                .'|category/([^/]++)(*:103)'
                                .'|([^/]++)(*:119)'
                            .')'
                        .')'
                        .'|contact/(?'
                            .'|modif/([^/]++)/([^/]++)(*:163)'
                            .'|delete/([^/]++)(*:186)'
                        .')'
                        .'|details/order/([0-9]+)(*:217)'
                    .')'
                    .'|projet/delete/([^/]++)(*:248)'
                .')'
                .'|/beer/([0-9]+)(*:271)'
                .'|/orders/([^/]++)(*:295)'
                .'|/edituser/([0-9]+)(*:321)'
                .'|/details/([0-9]+)(*:346)'
                .'|/shop/order/([^/]++)(*:374)'
                .'|/create\\-checkout\\-session/([^/]++)(*:417)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        53 => [[['_route' => 'app_admin_category_modif', '_controller' => 'App\\Controller\\Admin\\BeerController::categoryModif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        68 => [[['_route' => 'app_admin_beer_modif', '_controller' => 'App\\Controller\\Admin\\BeerController::beerModif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        103 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\BeerController::categoryDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        119 => [[['_route' => 'app_admin_beer_delete', '_controller' => 'App\\Controller\\Admin\\BeerController::beerDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        163 => [[['_route' => 'app_admin_contact_modif_check', '_controller' => 'App\\Controller\\Admin\\ContactController::contactCheck'], ['id', 'check'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        186 => [[['_route' => 'app_admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\ContactController::contactDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        217 => [[['_route' => 'app_admin_details_order', '_controller' => 'App\\Controller\\Admin\\OrderController::detailsOrder'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        248 => [[['_route' => 'app_admin_projet_delete', '_controller' => 'App\\Controller\\Admin\\ContactController::projetDelete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        271 => [[['_route' => 'app_beer_favoris', '_controller' => 'App\\Controller\\BeerController::favoris'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        295 => [[['_route' => 'app_profil_orders', '_controller' => 'App\\Controller\\ProfilController::orders'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        321 => [[['_route' => 'app_profil_edituser', '_controller' => 'App\\Controller\\ProfilController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        346 => [[['_route' => 'app_details_order', '_controller' => 'App\\Controller\\ProfilController::details'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        374 => [[['_route' => 'app_shop_order', '_controller' => 'App\\Controller\\ShopController::goShop'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        417 => [
            [['_route' => 'app_checkout', '_controller' => 'App\\Controller\\ShopController::checkout'], ['ssd'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
