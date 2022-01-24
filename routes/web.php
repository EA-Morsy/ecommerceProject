<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::redirect('/','/en');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/' ,function()
    {
         return view('welcome');
        
    });
    
    Auth::routes();
    Route::get('/admin' ,function()
    {
        return view('admin.dashboard');
    })->middleware('authenticated');
    

    Route::get('/soaps' , 'ProductController@viewAllSoaps');
Route::get('/viewSoap/{id}', 'ProductController@findSoap');
Route::get('/candles','ProductController@viewAllCandles');
Route::get('/viewCandle/{id}', 'ProductController@findCandle');

});
