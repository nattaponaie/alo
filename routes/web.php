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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

/* user profile */
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/index.php?page=my-account', 'ProfileController@index')->name('profile');

/* admin */
Route::get('admin', 'AdminController@index')->name('admin');

/* product */
Route::resource('create-category','CategoriesController');
Route::get('create-product', 'ProductController@index')->name('create-product');
Route::post('create-product', 'ProductController@store');
Route::get('create-category', 'CategoriesController@index')->name('create-category');
Route::post('create-category', 'CategoriesController@store');
Route::get('create-sub-category', 'SubCategoriesController@index')->name('create-sub-category');
Route::post('create-sub-category', 'SubCategoriesController@store');

/* shop page */
Route::get('shop', 'ShopController@index')->name('shop');
Route::get('product-category={id}','ShowProductController@show')->name('product-category');
Route::get('product={id}','ShowProductController@showProduct')->name('product');

/* upload product image */
Route::group(['prefix' => 'view-images'], function () {
    Route::get('/', 'UploadImagesController@showImages');
    Route::match(['get', 'post'], 'create', 'UploadImagesController@create');
    Route::match(['get', 'put'], 'update/{product_id}', 'UploadImagesController@update');
    Route::delete('delete/{image_id}/{product_id}', 'UploadImagesController@delete');
});

Route::get('upload-image', 'UploadImagesController@showUpload');
Route::post('images-save', 'UploadImagesController@store');

Route::group(['prefix' => 'laravel-crud-search-sort-ajax-modal-form'], function () {
    Route::get('/', 'TestController@index');
    Route::match(['get', 'post'], 'create', 'TestController@create');
    Route::match(['get', 'put'], 'update/{product_id}', 'TestController@update');
    Route::delete('delete/{id}', 'TestController@delete');
});



// Route::get('reg', 'Auth\RegisterController@show')->name('reg');
// Route::post('reg', 'Auth\RegisterController@register');
