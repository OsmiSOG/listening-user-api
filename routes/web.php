<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Symfony\Component\Mime\Message;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;
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
$router->get('/', function() {
    $data = [
        'message' => "Bienvenido al api de usuario",
        'routes' => [
            'method' => 'POST',
            'routes' => '/api/<<method>>',
            'methods' => ['/get/user', '/new/user', '/unregister/user']
        ],
    ];
    return response()->json($data, 200);
});
$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('/get/user', 'UserController@getByEmail');
    $router->post('/new/user', 'UserController@create');
    $router->post('/unregister/user', function ()  {

    });
    $router->get('/get/languages', 'LanguageController@getLanguages');
});
