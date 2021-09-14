<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

//$router->get('/user/{user}', function($user) {
//    return new \App\Http\Resources\UserCollection(User::findOrFail($user));
//});

$router->get('/user/{user}', 'UserController@show');
$router->get('/', 'UserController@index');
$router->post('/login', 'UserController@postLogin');
