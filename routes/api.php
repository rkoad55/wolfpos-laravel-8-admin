<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\AppController;
use App\Http\Controllers\AppController;

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

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/machine/details', function(Request $request) {
        return auth()->user();
    });

//Route::get('machine/details', 'App\Http\Controllers\AppController@details');
Route::get('/categories','App\Http\Controllers\AppController@categories');
Route::get('/categories/{id}','App\Http\Controllers\AppController@categoriesById');
Route::get('/product/{id}','App\Http\Controllers\AppController@productsByCatId');
Route::get('/list/product','App\Http\Controllers\AppController@productsByAll');
Route::get('/list/product/{id}','App\Http\Controllers\AppController@productsById');
Route::get('/list/deals','App\Http\Controllers\AppController@dealsByAll');
Route::get('/list/deals/{id}','App\Http\Controllers\AppController@dealsById');
Route::get('/extra/categories/{id}','App\Http\Controllers\AppController@extraCatById');
Route::get('/extra/deals/{id}','App\Http\Controllers\AppController@extraDealById');
Route::get('/print','App\Http\Controllers\AppController@print');

Route::get('/orders','App\Http\Controllers\AppController@orders');
Route::get('/orders/{id}','App\Http\Controllers\AppController@ordersById');
Route::get('/store/orders','App\Http\Controllers\AppController@ordersStore');
Route::get('/payment','App\Http\Controllers\AppController@paymentStore');
Route::get('/payment2','App\Http\Controllers\AppController@payment2');
    
    //Route::post('/auth/logout', [AuthController::class, 'logout']);
});



Route::post("login",[AppController::class,'index']);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('api/login', 'App\Http\Controllers\AppController@login');

// Route::get('api/login', 'App\Http\Controllers\AppController@login');
// //Route::post('register', 'PassportController@register');
 
// Route::middleware('auth:app')->group(function () {
//     Route::get('api/machine/details', 'App\Http\Controllers\AppController@details');
//     Route::get('/categories','App\Http\Controllers\AppController@categories');
// Route::get('/categories/{id}','App\Http\Controllers\AppController@categoriesById');
// Route::get('/product/{id}','App\Http\Controllers\AppController@productsByCatId');
// Route::get('/list/product','App\Http\Controllers\AppController@productsByAll');
// Route::get('/list/product/{id}','App\Http\Controllers\AppController@productsById');
// Route::get('/list/deals','App\Http\Controllers\AppController@dealsByAll');
// Route::get('/list/deals/{id}','App\Http\Controllers\AppController@dealsById');
// Route::get('/extra/categories/{id}','App\Http\Controllers\AppController@extraCatById');
// Route::get('/extra/deals/{id}','App\Http\Controllers\AppController@extraDealById');
// Route::get('/print','App\Http\Controllers\AppController@print');

// Route::get('/orders','App\Http\Controllers\AppController@orders');
// Route::get('/orders/{id}','App\Http\Controllers\AppController@ordersById');
// Route::get('/store/orders','App\Http\Controllers\AppController@ordersStore');
// Route::get('/payment','App\Http\Controllers\AppController@paymentStore');
// Route::get('/payment2','App\Http\Controllers\AppController@payment2');
 
//     //Route::resource('products', 'ProductController');
// });