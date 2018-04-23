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
    return view('main');
});
Route::get('/',function(){
    return view('contentpage');
});
Route::get('/', 'maincontroller@getdata');

Route::auth();
Route::get('/logout','HomeController@getLogout');
Route::get('/lvl-admin', 'HomeController@index');
Route::get('/slider',[
    'uses'  => 'HomeController@viewslider',
    'as'    => 'slider'
]);
Route::post('/addslider',[
    'uses'  => 'HomeController@addslides',
    'as'    => 'insertslider'
]);

Route::post('/updateslider/{id}',[
    'uses'  => 'HomeController@updateslider',
    'as'    => 'updateslider'
]);

Route::get('/deleteslide/{id}',[
    'uses'  => 'HomeController@deleteslides',
    'as'    => 'deleteslider'
]);

Route::get('/posts',[
    'uses'  => 'HomeController@posts',
    'as'    => 'posts'
]);

Route::post('/addpost',[
    'uses'  => "HomeController@addpost",
    'as'    => 'addpost'
]);

Route::post('/updatepost/{id}',[
    'uses'  => 'HomeController@updatepost',
    'as'    => 'updatepost'
]);
Route::get('/deletepost/{id}',[
    'uses'  => 'HomeController@deletepost',
    'as'    => 'deletepost'
]);

Route::get('/team',[
    'uses'  => 'HomeController@team',
    'as'    => 'team'
]);

Route::post('/updateteam/{id}',[
    'uses'  => 'HomeController@updateteam',
    'as'    => 'updateteam'
]);

Route::get('/client',[
    'uses'  => 'HomeController@client',
    'as'    => 'client'
]);

Route::post('/addclient',[
    'uses'  => 'HomeController@addclient',
    'as'    => 'addclient'
]);

Route::post('/updateclient/{id}',[
    'uses'  => 'HomeController@updateclient',
    'as'    => 'updateclient'
]);

Route::get('/deleteclient/{id}',[
    'uses'  => 'HomeController@deleteclient',
    'as'    => 'deleteclient'
]);

Route::get('/widget', [
    'uses'  => 'HomeController@widget',
    'as'    => 'widget'
]);

Route::post('/updatewidget',[
    'uses'  => 'HomeController@updatewidget',
    'as'    => 'updatewidget'
]);

Route::post('/updatewidget2',[
    'uses'  => 'HomeController@updatewidget2',
    'as'    => 'updatewidget2'
]);

Route::post('/updatewidget3',[
    'uses'  => 'HomeController@updatewidget3',
    'as'    => 'updatewidget3'
]);

Route::get('/user',[
    'uses'  => 'HomeController@user',
    'as'    => 'user'
]);

Route::post('/adduser',[
    'uses'  => 'HomeController@adduser',
    'as'    => 'adduser'
]);

Route::post('/updateuser/{id}',[
    'uses'  => 'HomeController@updateuser',
    'as'    => 'updateuser'
]);

Route::post('/resetpassword/{id}',[
    'uses'  => 'HomeController@resetpassword',
    'as'    => 'resetpassword'
]);

Route::get('/dashboard', [
  'uses'    => 'HomeController@dashboard',
  'as'      => 'dashboard'
]);


