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

Route::get('/', function () {
    return view('welcome');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
    echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
    echo "Name: ".$name;
});

Route::get('foo/bar', function () {
    return 'Hello World';
});

Route::get('role',[
    'middleware' => 'Role:admin',
    'uses' => 'TestController@index',
]);

Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

// Implicit controller
Route::controller('test','ImplicitController');


Route::get('/uri/request-methods','UriController@index');

//  user register
Route::get('/register',function(){
    return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

//Cookie example
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

// basic response
Route::get('/basic_response', function () {
    // return 'Hello Upender..';

    // with headers
   // return response("Hello", 200)->header('Content-Type', 'text/html');

    // with josn response
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

// passing data to view
Route::get('/passing_data', function () {
    // with josn response
    return view('passing_data',['name'=> 'Your name is upender']);
});

// sharing data acroos the views
Route::get('/test1', function(){
    return view('test1');
});
Route::get('/test2', function(){
    return view('test2');
});

Route::get('/blade', function(){
    return view('page', array('name'=> 'Upender'));
});


// url redirection
Route::get('user/profile', ['as' => 'profile123', function () {
   return view('test1');
}]);

Route::get('profile',function(){
    return redirect()->route('profile123');
});

Route::get('form', function () {
    return view('form');
});