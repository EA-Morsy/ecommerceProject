<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::redirect('/','/en');
Route::group(['prefix'=>'{language}'],function(){


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home', function () {
    return view('home');
});
Route::redirect('/','/en');
Route::get('/' ,function()
{
    return view('welcome');
});

/*Admin routes */
Route::post('/addProduct','ProductController@addProduct'); 
Route::get('/addProduct','ProductController@addProductView');
Route::get('/viewAllProducts','ProductController@viewAllProducts');
Route::get('/deleteProduct/{id}','ProductController@deleteProduct');
Route::get('/view/{id}','ProductController@viewProduct');
Route::get('/updateProduct/{id}','ProductController@updateProductView');
Route::get('/updateProduct/{id}','ProductController@updateProductView');
Route::put('/updateProduct/{id}','ProductController@updateProduct');

/************************User Routes*****************************/ 
Route::get('/list/{id}','userController@list');
Route::post('/create','userController@add');
Route::get('/show','ProductController@listProduct');

// Route::put('/updateProduct/{id}','ProductController@updateProduct');
Route::get('/soaps' , 'ProductController@viewAllSoaps');
Route::get('/viewSoap/{id}', 'ProductController@findSoap');
Route::get('/candles','ProductController@viewAllCandles');
Route::get('/viewCandle/{id}', 'ProductController@findCandle');

});