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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::group(['middleware' => ['auth']], function() {
    // define your route, route groups here


Route::get('/index', 'App\Http\Controllers\AdminController@dashboard_1');
Route::get('/analytics', 'App\Http\Controllers\AdminController@analytics');
Route::get('/customer-list', 'App\Http\Controllers\AdminController@customer_list');
Route::get('/element', 'App\Http\Controllers\AdminController@koki_element');
Route::get('/order', 'App\Http\Controllers\AdminController@order');
Route::get('/order-list', 'App\Http\Controllers\AdminController@order_list');
Route::get('/review', 'App\Http\Controllers\AdminController@review');
Route::get('/app-calender', 'App\Http\Controllers\AdminController@app_calender');
Route::get('/app-profile', 'App\Http\Controllers\AdminController@app_profile');
Route::get('/chart-chartist', 'App\Http\Controllers\AdminController@chart_chartist');
Route::get('/chart-chartjs', 'App\Http\Controllers\AdminController@chart_chartjs');
Route::get('/chart-flot', 'App\Http\Controllers\AdminController@chart_flot');
Route::get('/chart-morris', 'App\Http\Controllers\AdminController@chart_morris');
Route::get('/chart-peity', 'App\Http\Controllers\AdminController@chart_peity');
Route::get('/chart-sparkline', 'App\Http\Controllers\AdminController@chart_sparkline');
Route::get('/ecom-checkout', 'App\Http\Controllers\AdminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\AdminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\AdminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\AdminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\AdminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\AdminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\AdminController@ecom_product_order');
Route::get('/email-compose', 'App\Http\Controllers\AdminController@email_compose');
Route::get('/email-inbox', 'App\Http\Controllers\AdminController@email_inbox');
Route::get('/email-read', 'App\Http\Controllers\AdminController@email_read');
Route::get('/form-editor-summernote', 'App\Http\Controllers\AdminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\AdminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\AdminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\AdminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\AdminController@form_wizard');
Route::get('/map-jqvmap', 'App\Http\Controllers\AdminController@map_jqvmap');
Route::get('/page-error-400', 'App\Http\Controllers\AdminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\AdminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\AdminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\AdminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\AdminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\AdminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\AdminController@page_lock_screen');

Route::get('/page-register', 'App\Http\Controllers\AdminController@page_register');
Route::get('/table-bootstrap-basic', 'App\Http\Controllers\AdminController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\AdminController@table_datatable_basic');
Route::get('/uc-nestable', 'App\Http\Controllers\AdminController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\AdminController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\AdminController@uc_select2');
Route::get('/uc-sweetalert', 'App\Http\Controllers\AdminController@uc_sweetalert');
Route::get('/uc-toastr', 'App\Http\Controllers\AdminController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\AdminController@ui_accordion');
Route::get('/ui-alert', 'App\Http\Controllers\AdminController@ui_alert');
Route::get('/ui-badge', 'App\Http\Controllers\AdminController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\AdminController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\AdminController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\AdminController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\AdminController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\AdminController@ui_dropdown');
Route::get('/ui-grid', 'App\Http\Controllers\AdminController@ui_grid');
Route::get('/ui-list-group', 'App\Http\Controllers\AdminController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\AdminController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\AdminController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\AdminController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\AdminController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\AdminController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\AdminController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\AdminController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\AdminController@widget_basic');
Route::resource('/products', App\Http\Controllers\ProductsController::class);
Route::post('/products/delete', 'App\Http\Controllers\ProductsController@destroy');
Route::resource('/users', App\Http\Controllers\UsersController::class);
Route::post('/users/delete', 'App\Http\Controllers\UsersController@destroy');
Route::resource('/category', App\Http\Controllers\CategoriesController::class);
Route::post('/category/delete', 'App\Http\Controllers\CategoriesController@destroy');
Route::resource('/addons', App\Http\Controllers\AddonsController::class);
Route::post('/addons/delete', 'App\Http\Controllers\AddonsController@destroy');
Route::post('/addons/show', 'App\Http\Controllers\AddonsController@show');
Route::resource('/deals', App\Http\Controllers\DealsController::class);
Route::post('/deals/delete', 'App\Http\Controllers\DealsController@destroy');

Route::resource('/categoriesExtra', App\Http\Controllers\CategoriesExtraController::class);
Route::post('/categoriesExtra/delete', 'App\Http\Controllers\CategoriesExtraController@destroy');
Route::post('/categoriesExtra/show', 'App\Http\Controllers\CategoriesExtraController@show');

Route::resource('/dealsExtra', App\Http\Controllers\DealsExtraController::class);
Route::post('/dealsExtra/delete', 'App\Http\Controllers\DealsExtraController@destroy');
Route::post('/dealsExtra/show', 'App\Http\Controllers\DealsExtraController@show');

});
Auth::routes();

Route::get('/', 'App\Http\Controllers\AdminController@page_login');



// App Routes 


//Route::post('register', 'PassportController@register');

//Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/machine/details', 'App\Http\Controllers\AppController@details');
// Route::get('/categories','App\Http\Controllers\AppController@categories');
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
 
    //Route::resource('products', 'ProductController');
//});


