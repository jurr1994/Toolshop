<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/nutsandbolts', function() {
    return view('pages.nutsandbolts');
});
route::get('/screws', 'ScrewsController@index');

route::get('/glue', 'GlueController@index');
    
route::get('/orderlist', 'OderlistController@index');
    
route::get('/paint', 'PaintController@index');

