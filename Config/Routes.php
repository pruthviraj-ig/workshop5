<?php
use App\Controllers\Pages;
use App\Controllers\News;
use App\Controllers\Ajax;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Apis;
use App\Controllers\Apisr;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('apis/wikipedia', [Apis::class, 'wikipedia']);
$routes->get('apisr/reed', [Apisr::class, 'reed']);


$routes->get('pages', [Pages::class, 'index']);
$routes->get('page/(:segment)', [Pages::class, 'view']);


$routes->get('news', [News::class, 'index']);         
$routes->get('news/new', [News::class, 'new']);  
$routes->get('news/(:segment)', [News::class, 'show']);  

$routes->get('ajaxnews/(:segment)', [Ajax::class, 'get']);

$routes->post('news', [News::class, 'create']); 