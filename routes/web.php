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
Route::get('/customer/editdetails','CustomerController@editdetails');


Route::get('/customer/viewprizes','PrizeController@viewprize');



Route::get('/employee/home/view','HomeController@about');

Route::get('/home/view', 'HomeController@employeedetails');

Route::get('/employee/view','HomeController@viewemployee')->middleware('auth:admin');

/*Route::get('/employee/edit', function () {
    return view('employee.edit');
});*/


//route::get('/customer','CustomerController@index');
//Route::get('/customer','customercontroller@create' );
 route::resource('customer','CustomerController');
 route::resource('prize','PrizeController')->middleware('auth:admin');


//Route::resource('customer', 'customerController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::resource('employee','HomeController');

/*Route::get('/employee/home', function () {
    return view('employee.home');
});*/

View::composer(['*'],function($view){
    $user=Auth::user();
    $view->with('user',$user);
});



