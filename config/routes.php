<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);


# /courses/institution/*    
Router::scope('/courses', ['controller' => 'courses'], function(RouteBuilder $routes){
    $routes->connect('/institution/*', ['action' => 'educationalinstitutions']);
});

Router::scope('/', function (RouteBuilder $routes) {
   
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});
