<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/user/{id?}/{name?}', function ($id=null, $name='Ivan') {
    return $id .'-'. $name;
}) -> where(['name'=>',[A-Z a-z]+', 'id '=>'[0-9+]'])
;

Route::get('user/profile/{id?}', array('uses'=>'User@getIndex'));
Route::controller('profile', 'User');
Route::controllers(['profile'=>'User', 'form'=>'FormController', 'test'=>'TestController',
'base'=>'BaseController', 'auth'=>'Auth\AuthController', 'home'=>'HomeController'
]);
Route::get('{id?}', ['uses'=>'BaseController@getindex']);