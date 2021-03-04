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
        '/authentification' => [[['_route' => 'authentification', '_controller' => 'App\\Controller\\AuthentificationController::index'], null, null, null, false, false, null]],
        '/insertUser' => [[['_route' => 'insertUser', '_controller' => 'App\\Controller\\AuthentificationController::insertUser'], null, null, null, false, false, null]],
        '/insertUserBdd' => [[['_route' => 'insertUserBdd', '_controller' => 'App\\Controller\\AuthentificationController::insertUserBdd'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\AuthentificationController::connexion'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\AuthentificationController::dashboard'], null, null, null, false, false, null]],
        '/listeUser' => [[['_route' => 'listeUser', '_controller' => 'App\\Controller\\AuthentificationController::listeUser'], null, null, null, false, false, null]],
        '/genre' => [[['_route' => 'genre', '_controller' => 'App\\Controller\\GenreController::index'], null, null, null, false, false, null]],
        '/insertGenre' => [[['_route' => 'insertGenre', '_controller' => 'App\\Controller\\GenreController::insertGenre'], null, null, null, false, false, null]],
        '/insertGenreBdd' => [[['_route' => 'insertGenreBdd', '_controller' => 'App\\Controller\\GenreController::insertGenreBdd'], null, null, null, false, false, null]],
        '/listeGenre' => [[['_route' => 'listeGenre', '_controller' => 'App\\Controller\\GenreController::listeGenre'], null, null, null, false, false, null]],
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
                .'|/deleteGenre/([^/]++)(*:190)'
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
        190 => [
            [['_route' => 'deleteGenre', '_controller' => 'App\\Controller\\GenreController::deleteGenre'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
