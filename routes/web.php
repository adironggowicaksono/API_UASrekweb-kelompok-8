<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Laravel\Lumen\Routing\Router;

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
$router->group(['middleware' => 'basicAuth'], function () use ($router) { 
        $router->post('/uasrekweb', 'ControllerUasRekweb@create');
        $router->get('/uasrekweb', 'ControllerUasRekweb@index');
        $router->get('/detail/{id}', 'ControllerUasRekweb@detail');
        $router->put('/update/{id}', 'ControllerUasRekweb@update');
        $router->delete('/delete/{id}', 'ControllerUasRekweb@delete');
});