<?php

use Guirod\MvcTp\Router;
use Guirod\MvcTp\Controllers\UserController;

const ROUTE_PREFIX = '/mvc-tp';

$router = new Router();

$router->addRoute(ROUTE_PREFIX . '/', UserController::class, 'index');
$router->addRoute(ROUTE_PREFIX . '/user', UserController::class, 'view');
$router->addRoute(ROUTE_PREFIX . '/user/add', UserController::class, 'add');
$router->addRoute(ROUTE_PREFIX . '/user/delete', UserController::class, 'delete');
$router->addRoute(ROUTE_PREFIX . '/user/change', UserController::class, 'change');

$router->addRoute(ROUTE_PREFIX . '/json', UserController::class, 'viewAllAjax');
