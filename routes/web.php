<?php

use GuzzleHttp\Middleware;
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
   
    



    /*Admin routes */
    Route::get('/adminLogin','AdminController@adminLoginView')->name('admin_Login')->middleware('guest:admins');
    Route::post('/adminLogin', 'AdminController@adminLogin')->name('adminLogin');
    
Route::group(['middleware'=>'adminAuth:admins'],function(){
    Route::post('/adminLogout','AdminController@adminLogout')->name('adminLogout');
    Route::get('/adminLogout','AdminController@adminLogoutView')->name('admin_Logout');
    Route::get('/admin' ,'AdminController@dashboard')->name('dashboard');
    Route::get('/addCategory','CategoryController@create');
    Route::post('/addCategory','CategoryController@store');
    Route::post('/addProduct','ProductController@addProduct'); 
    Route::get('/addProduct','ProductController@addProductView');
    Route::get('/viewAllProducts','ProductController@viewAllProducts');
    Route::get('/deleteProduct/{id}','ProductController@deleteProduct');
    Route::get('/view/{id}','ProductController@viewProduct');
    Route::get('/updateProduct/{id}','ProductController@updateProductView');
    Route::put('/updateProduct/{id}','ProductController@updateProduct');
});
/************************User Routes*****************************/ 
    Route::get('/list/{id}','userController@list');
    Route::post('/create','userController@add');
    Route::get('/show','ProductController@listProduct');

    Route::get('/soaps' , 'ProductController@viewAllSoaps');
    Route::get('/viewSoap/{id}', 'ProductController@findSoap');

    Route::get('/candles','ProductController@viewAllCandles');
    Route::get('/viewCandle/{id}', 'ProductController@findCandle');

});
