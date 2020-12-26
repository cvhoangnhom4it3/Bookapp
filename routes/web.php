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
Route::get('/clear-cache',function(){
	$exitCode = Artisan::call('cache:clear');
});
Route::get('/', function () {
    return view('PagesAdmin.dashboard');
});
Route::get('trangchu','getdata@gettheloai');

Route::group(['prefix'=>'Admin'],function(){
	Route::get('index','pagecontroller@index');

	//Route của p_category 
	Route::get('insert_p_category','p_categorycontroller@get_insert_p_category');
	Route::post('insert_p_category','p_categorycontroller@post_insert_p_category');
	Route::get('edit_p_category/{id}','p_categorycontroller@edit_p_category');
	Route::post('edit_p_category/{id}','p_categorycontroller@post_edit_p_category');
	Route::get('view_p_category','p_categorycontroller@view_p_category');
	Route::get('delete_p_category/{id}', 'p_categorycontroller@delete_p_category');

	//Route của category 
	Route::get('insert_category','categorycontroller@get_insert_category');
	Route::post('insert_category','categorycontroller@post_insert_category');
	Route::get('edit_category/{id}','categorycontroller@edit_category');
	Route::post('edit_category/{id}','categorycontroller@post_edit_category');
	Route::get('view_category','categorycontroller@view_category');
	Route::get('delete_category/{id}', 'categorycontroller@delete_category');

	//Route của slide 
	Route::get('insert_slide','Slidecontroller@get_insert_slide');
	Route::post('insert_slide','Slidecontroller@post_insert_slide');
	Route::get('edit_slide/{id}','Slidecontroller@edit_slide');
	Route::post('edit_slide/{id}','Slidecontroller@post_edit_slide');
	Route::get('view_slides','Slidecontroller@view_slide');
	Route::get('delete_slide/{id}', 'Slidecontroller@delete_slide');

	//Route của product 
	Route::get('insert_product','productcontroller@get_insert_product');
	Route::post('insert_product','productcontroller@post_insert_product');
	Route::get('edit_product/{id}','productcontroller@edit_product');
	Route::post('edit_product/{id}','productcontroller@post_edit_product');
	Route::get('view_product','productcontroller@view_product');
	Route::get('delete_product/{id}', 'productcontroller@delete_product');
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('theloai/{iddanhmuc}','Ajaxcontroller@get_theloai');
	});

	Route::get('insert_admin','pagecontroller@insert_admin');
	Route::get('insert_coupon','pagecontroller@insert_coupon');
	Route::get('view_admins','pagecontroller@view_admins');
	Route::get('view_coupons','pagecontroller@view_coupons');
	Route::get('view_customers','pagecontroller@view_customers');
	Route::get('view_orders','pagecontroller@view_orders');
	Route::get('edit_admin','pagecontroller@edit_admin');
	Route::get('edit_coupon','pagecontroller@edit_coupon');
	Route::get('edit_css','pagecontroller@edit_css');
	//Route::get('typography','pagecontroller@typography');
	// Route::get('upgrade','pagecontroller@upgrade');
	// Route::get('user','pagecontroller@user');
	// Route::group(['prefix'=>'truyen'],function(){
	// 	Route::get('danhsach','truyenController@gettruyen');
	// 	Route::get('them','truyenController@getthem');
	// 	Route::post('them','truyenController@postthem');
	// 	Route::get('sua','truyenController@suatruyen');
	// 	Route::get('xoa','truyenController@xoatruyen');
	// });
	// Route::group(['prefix'=>'chapter'],function(){
	// 	Route::get('them','chapterController@getthem');
	// 	Route::get('sua','chapterController@suachapter');
	// 	Route::get('xoa','chapterController@xoachapter');
	// 	Route::post('them','chapterController@postthem');
	// });
	// Route::group(['prefix'=>'image'],function(){
	// 	Route::get('them','imageController@getthem');
	// 	Route::get('sua','imageController@suaimage');
	// 	Route::get('xoa','imageController@xoaimage');
	// 	Route::post('them','imageController@postthem');
	// });
});