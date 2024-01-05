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


Auth::routes();



Route::get('/', 'ButtonController@index')->name('first');
Route::get('/FrontHome', 'FrontEndController@index')->name('FrontHome');
Route::get('/category/dish/show/{category_id}', 'FrontEndController@dish_show')-> name('category_dish');

/*======================= Cart route start here =======================*/
Route::post('/add/cart', 'cartController@insert')->name('add_to_cart');
Route::get('/cart/show', 'cartController@show')->name('cart_show');
Route::get('/cart/remove/{rowId}', 'cartController@remove')->name('remove_item');
Route::post('/cart/update', 'cartController@update')->name('update_cart');
/*======================= Cart route End here =======================*/

/*======================= Check out route start here =======================*/
Route::get('/checkout/payment', 'CheckOutController@payment')->name('checkout_payment');
Route::post('/checkout/shipping', 'CheckOutController@shipping');
Route::get('/checkout/shipping/store', 'CheckOutController@save')->name('store_shipping');
Route::get('/checkout/details', 'UserOrderController@store')->name('store_user_order');

/*======================= Check out route End here =======================*/

/*======================= Customer route start here =======================*/
Route::post('/register/customer', 'CustomerController@show')->name('sign_up');
Route::get('/register/customer/', 'CustomerController@store')->name('store_customer');

Route::get('/login/customer', 'CustomerController@login')->name('login_in');
Route::post('/logout/customer', 'CustomerController@logout')->name('login_out');
Route::post('/check/customer/login', 'CustomerController@check')->name('check_login');


Route::get('/shipping', 'CustomerController@shipping');
Route::post('/shipping/store', 'CustomerController@save')->name('store_shipping');
/*======================= Customer route End here =======================*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*======================= Category start here =======================*/
Route::get('/category/add', 'categoryController@index')->name('show_cate_table');
Route::post('/category/save', 'categoryController@save')->name('cate_save');
Route::get('/category/manage', 'categoryController@manage')->name('manage_cate');

Route::get('/category/active/{category_id}', 'categoryController@active')->name('category_active');

Route::get('/category/Inactive/{category_id}', 'categoryController@Inactive')->name('Inactive_cate');

Route::get('/category/delete/{category_id}', 'categoryController@delete')->name('cate_delete');

Route::post('/category/update', 'categoryController@update')->name('cate_update');

/*======================= Category end here =======================*/ 
/*======================= Delivery Boy start here =======================*/
Route::get('/delivery/boy/add', 'deliverBoyController@index')->name('show_deliveryBoy_add_table');
Route::post('/delivery/boy/save', 'deliverBoyController@save_boy')->name('delivery_save');
Route::get('/delivery/boy/manage', 'deliverBoyController@boy_manage')->name('delivery_boy_manage');
Route::get('/delivery/boy/delete/{delivery_boy_id}', 'deliverBoyController@boy_delete')->name('delivery_boy_delete');
Route::get('/delivery/boy/inactive/{delivery_boy_id}', 'deliverBoyController@boy_inactive')->name('delivery_boy_inactive');
Route::get('/delivery/boy/active/{delivery_boy_id}', 'deliverBoyController@boy_active')->name('delivery_boy_active');
Route::post('/delivery/boy/update', 'deliverBoyController@boy_update')->name('delivery_boy_update');
/*======================= Delivery Boy end here =======================*/
/*======================= Coupon start here here =======================*/ 
Route::get('/coupon/code/add', 'CouponController@index')->name('show_coupon_table');
Route::post('/coupon/code/save', 'CouponController@code_save')->name('save_coupon_code');
Route::get('/coupon/code/manage', 'CouponController@code_manage')->name('manage_coupon_code');
Route::get('/coupon/code/delete/{coupon_id}', 'CouponController@code_delete')->name('delete_coupon_code');
Route::get('/coupon/code/inactive/{coupon_id}', 'CouponController@code_inactive')->name('inactive_coupon_code');
Route::get('/coupon/code/active/{coupon_id}', 'CouponController@code_active')->name('active_coupon_code');
Route::post('/coupon/code/update', 'CouponController@code_update')->name('update_coupon_code');
/*======================= Coupun end here =======================*/ 

/*======================== Dish Start Here ================================ */

Route::get('/dish/add','DishController@index')->name('show_dish_table');
Route::post('/dish/save', 'DishController@save_dish')->name('save_dish_date');
Route::get('/dish/manage', 'DishController@manage_dish')->name('manage_dish_date');
Route::get('/dish/inactive{dish_id}', 'DishController@inactive')->name('dish_inactive');
Route::get('/dish/active{dish_id}', 'DishController@active')->name('dish_active');
Route::get('/dish/delete{dish_id}', 'DishController@delete')->name('dish_delete');
Route::post('/dish/update', 'DishController@update')->name('update_dish');
/*======================== Dish End Here ================================ */