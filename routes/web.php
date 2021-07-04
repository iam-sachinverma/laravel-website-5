<?php

use Illuminate\Support\Facades\Route;

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


require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('App\\Http\\Controllers\\Admin')->group(function(){
    // All Admin Routes:-
    Route::match(['get','post'],'/','AdminController@login');

    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard','AdminController@dashboard');
        Route::get('settings','AdminController@settings');
        Route::get('logout','AdminController@logout');
        Route::post('check-current-pwd','AdminController@chkCurrentPassword');
        Route::post('update-current-pwd','AdminController@updateCurrentPassword');
        Route::match(['get','post'],'update-admin-details','AdminController@updateAdminDetails');
        //QUERY
        Route::get('querys','QueryController@querys');
    });

   
});

Route::namespace('App\\Http\Controllers\\Front')->group(function(){
    //Home Page Route
    Route::get('/','IndexController@index'); 
    Route::post('/add-query','QueryController@queryForm'); 
});