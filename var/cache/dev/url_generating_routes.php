<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminHomeController::index'], [], [['text', '/admin']], [], []],
    'admin_user' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], [], [['text', '/admin/user']], [], []],
    'admin_user_create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::create'], [], [['text', '/admin/user/create']], [], []],
    'create_campaign' => [[], ['_controller' => 'App\\Controller\\Main\\CampaignController::createCampaign'], [], [['text', '/create/campaign']], [], []],
    'edit_campaign' => [['id'], ['_controller' => 'App\\Controller\\Main\\CampaignController::editCampaign'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit/campaign']], [], []],
    'delete_campaign' => [['id'], ['_controller' => 'App\\Controller\\Main\\CampaignController::deleteCampaign'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete/campaign']], [], []],
    'show_campaign' => [['id'], ['_controller' => 'App\\Controller\\Main\\CampaignController::showCompaing'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show/campaign']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\Main\\HomeController::index'], [], [['text', '/']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\Main\\RegistrationController::index'], [], [['text', '/registration']], [], []],
    'user_profile' => [[], ['_controller' => 'App\\Controller\\Main\\UserProfileController::index'], [], [['text', '/profile']], [], []],
    'admin_login' => [[], ['_controller' => 'App\\Controller\\Security\\AdminAuthController::login'], [], [['text', '/admin/login']], [], []],
    'admin_logout' => [[], ['_controller' => 'App\\Controller\\Security\\AdminAuthController::logout'], [], [['text', '/admin/logout']], [], []],
    'user_login' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::login'], [], [['text', '/login']], [], []],
    'user_logout' => [[], ['_controller' => 'App\\Controller\\Security\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
