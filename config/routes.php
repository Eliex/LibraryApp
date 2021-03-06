<?php


use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

//  /bookmarks/tagged/anything
Router::scope('/bookmarks',['controller' => 'Bookmarks'], function($routes){
    $routes->connect('/tagged/*', ['action' => 'tags']);
});

Router::scope('/', function (RouteBuilder $routes) {

  //  $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
  //  $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    
    
    $routes->fallbacks(DashedRoute::class);
});


Plugin::routes();
