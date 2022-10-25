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

Route::prefix('newproject')->group(function() {
    Route::get('/', 'NewProjectController@index');
});


//Route::middleware('auth:api')->get('/newproject', function (Request $request) {
//    return $request->user();
//});
