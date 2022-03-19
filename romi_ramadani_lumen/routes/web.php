<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('user','UserController@all');
$router->get('user/{id}','UserController@get');
$router->post('user','UserController@add');
$router->put('user/{id}','UserController@put');
$router->delete('user/{id}','UserController@remove');

?>