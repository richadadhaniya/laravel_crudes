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
// client side
// home page
Route::get('/','IndexController@view')->name('welcome');
// contact page
Route::get('/contact-us','ContactControler@contacts')->name('contacts');
Route::post('contacts','ContactControler@viewcontact')->name('view.contact');
// product page
Route::get('/get-product','ProductController@product')->name('product');

Route::get('/product-detail','ProductdetailController@product_detail')->name('product.detail');
Route::get('/singleproduct{id}','ProductdetailController@single_product')->name('single.product');
Route::get('/category{id}','ProductdetailController@showcategory')->name('showproduct');
Route::get('/abouts','AboutController@about')->name('about');
Route::get('/maps','ContactControler@viewmap')->name('map');
Route::get('/gallarys','ClientgallaryController@gallaryy')->name('view.gallary');
Route::get('/gallarycat{id}','ClientgallaryController@gallarycat')->name('showgallary');

// Add_cart
 Route::get('cart', 'ProductdetailController@cart')->name('cart');
Route::get('add-to-cart/{id}','ProductdetailController@addToCart')->name('add.to.cart');
Route::patch('update-cart', 'ProductdetailController@update')->name('update.cart');
Route::delete('remove-from-cart','ProductdetailController@remove')->name('remove.from.cart');

// client side over

Route::group(['middleware'=>'auth'],function (){
	// admin_about
Route::get('record','AdminaboutController@about')->name('admin.about');
Route::get('editabout/{id}','AdminaboutController@editabout')->name('edit.about');
Route::post('updateabout','AdminaboutController@updateabout')->name('update.about');
// admin_category
Route::get('category','AdmincategoryController@category')->name('admin.category');
Route::get('addcategory','AdmincategoryController@add_category')->name('add.category');
Route::post('store/category','AdmincategoryController@store_category')->name('store.category');
Route::get('editcategory/{id}','AdmincategoryController@editcategory')->name('edit.category');
Route::post('updatecategory','AdmincategoryController@updatecategory')->name('update.category');
Route::get('delete/category/{id}','AdmincategoryController@delete_category')->name('delete.category');
// admin_product
Route::get('product','AdminproductController@adminproduct')->name('admin.product');
Route::get('addproduct','AdminproductController@add_product')->name('add.product');
Route::post('store/product','AdminproductController@store_product')->name('store.product');
Route::get('product/edit/{id}','AdminproductController@edit_product')->name('edit.product');
Route::post('update/product','AdminproductController@update_product')->name('update.product');
Route::get('delete/product/{id}','AdminproductController@delete_product')->name('delete.product');
// admin_logo
Route::get('logo','AdminlogoController@adminlogo')->name('admin.logo');
Route::get('logo/edit/{id}','AdminlogoController@edit_logo')->name('edit.logo');
Route::post('update/logo','AdminlogoController@update_logo')->name('update.logo');
// admin_socialmedia
Route::get('socialmedia','AdminsocialmediaController@admin_socialmedia')->name('admin.socialmedia');
Route::get('socialmedia/edit/{id}','AdminsocialmediaController@edit_socialmedia')->name('edit.socialmedia');
Route::post('update/socialmedia','AdminsocialmediaController@update_socialmedia')->name('update.socialmedia');
// admin_map
Route::get('map','AdminmapController@admin_map')->name('admin.map');
Route::get('map/edit/{id}','AdminmapController@edit_map')->name('edit.map');
Route::post('update/map','AdminmapController@update_map')->name('update.map');
// admin_slider
Route::get('slider','AdminsliderController@adminslider')->name('admin.slider');
Route::get('addslider','AdminsliderController@add_slider')->name('add.slider');
Route::post('store/slider','AdminsliderController@store_slider')->name('store.slider');
Route::get('slider/edit/{id}','AdminsliderController@edit_slider')->name('edit.slider');
Route::post('update/slider','AdminsliderController@update_slider')->name('update.slider');
Route::get('delete/slider/{id}','AdminsliderController@delete_slider')->name('delete.slider');
// admin_contact
Route::get('contact','admincontactController@admincontact')->name('admin.contact');
Route::get('contact/edit/{id}','admincontactController@edit_contact')->name('edit.contact');
Route::post('update/contact','admincontactController@updatecontact')->name('update.contact');
// admin_username and password_hash
Route::get('user','AdminuserController@edituser')->name('edit.user');
Route::post('update/user','AdminuserController@updateuser')->name('update.user');
// query table
Route::get('querytable','QueryController@query')->name('client.query');

// gallary
Route::get('admingallary','GallaryController@gallary')->name('admin.gallary');
Route::get('addgallary','GallaryController@add_gallary')->name('add.gallary');
Route::post('store/product','GallaryController@store_gallary')->name('store.gallary');
Route::get('gallary/edit/{id}','GallaryController@editgallary')->name('edit.gallary');
Route::post('update/gallary','GallaryController@updategallary')->name('update.gallary');
Route::get('delete/gallary/{id}','GallaryController@delete_gallary')->name('delete.gallary');





Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});
Auth::routes();

