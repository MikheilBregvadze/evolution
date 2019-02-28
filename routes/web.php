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
    return view('pages.home');
});

Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/terms', function () {
    return view('pages.terms');
});
Route::get('/privacy', function () {
    return view('pages.privacy');
});



Auth::routes(['verify' => true]);


Route::middleware('auth')->group(function (){

});


//Route::get('/user/activaiton/{token}', 'Auth\RegisterController@userActivation');
