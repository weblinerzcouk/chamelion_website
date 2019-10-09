<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
//dated 08/10/2019
Route::post('/updateprofile', 'api\Api_Controller@updateProfile');
Route::get('/listspecialproducts/{id}','api\Api_Controller@listSpecialProducts');
Route::get('/listproductsbycategory/{id}','api\Api_Controller@listProductsByCategory');
Route::get('/productdetail/{id}','api\Api_Controller@productDetail');
Route::get('/relatedproduct/{id}','api\Api_Controller@relatedProduct');
Route::post('/addtocart','api\Api_Controller@addToCart');
Route::group(['middleware' => 'auth:api'], function(){

    Route::post('details', 'UserController@details');
});


?>