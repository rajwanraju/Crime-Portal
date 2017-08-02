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

Route::get('/', function () {
    return view('user.index');
});

Auth::routes();




Route::post('/login','AuthController@login');
Route::get('/signup','AuthController@viewForm');
Route::post('/signup','AuthController@signUp');
Route::get('/logout','AuthController@logout');



Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>'AuthMiddleware'],function(){
Route::get('/dashboard','AdminController@dashboard');



Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
Route::get('/category/view', 'CategoryController@viewCategory');





Route::get('/addcrime','UserController@AddCrime');

Route::post('/storeCrime', 'UserController@StoreCrime');

Route::get('/userPage', 'UserController@viewPage');


Route::get('/managePost','AdminController@managePost');

Route::get('/addfeedback/{id}','AdminController@Feedbackform');
Route::post('/storeFeedback','AdminController@StoreFeedback');




Route::get('/viewPage','PostController@viewPost');
Route::get('/viewPost/details/{id}', 'PostController@readPost');

});



