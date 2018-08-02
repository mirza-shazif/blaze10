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

Route::get('/wall', 'PagesController@wall');
Route::post('/wall', 'PagesController@create_post')->name('wall');

Route::post('/states', 'DataController@get_states')->name('get.states');
Route::post('/cities', 'DataController@get_cities')->name('get_cities');
Route::get('/races','DataController@get_races')->name('get_races');



///Admin ROutes

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
  Route::get('/dashboard', 'NavigationController@dashboard')->name('admin.dashboard');
  Route::get('/challenges', 'NavigationController@challenges')->name('admin.challenges');
  Route::get('/users', 'NavigationController@users')->name('admin.users');
});


//User Routes

Route::group(['prefix' => 'user', 'namespace' => 'User' ], function() {

  Route::post('/attempt-login', 'UserController@attempt_login')->name('user.attempt_login');
  Route::post('/register', 'UserController@register')->name('user.register');
  Route::post('/challenges','ChallengeController@index')->name('user.challenges');
  Route::post('/update-password', 'UserController@update_password')->name('user.update_password');
  Route::post('/resend-verification-link', 'UserController@resend_verification_email')->name("user.resend_verification_link");


  Route::get('/logout', 'UserController@logout');

  Route::get('/home', 'NavigationController@home')->name('user.home');
  Route::get('/settings', 'NavigationController@settings')->name('user.settings');
  Route::get('/explore', 'NavigationController@explore')->name('user.explore');
  Route::get('/page2', 'NavigationController@page2')->name('user.page2');
  Route::get('/profile', 'NavigationController@profile')->name('user.profile');



  Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('user.login');

  Route::get('/not-verified', 'NavigationController@unverified')->name('user.unverified');


  Route::get('/verify/{user_id}/{token}', 'NavigationController@verify_user')->name('user.verify');

});



Route::get('/', 'PagesController@Home');
Route::get('/aboutUs', 'PagesController@aboutUs');
Route::get('/acting', 'PagesController@acting');
Route::get('/contactUs', 'PagesController@contactUs');
Route::get('/dance', 'PagesController@dance');
Route::get('/film', 'PagesController@film');
Route::get('/footer', 'PagesController@footer');
Route::get('/joinNow', 'PagesController@joinNow');
Route::get('/modeling', 'PagesController@modeling');
Route::get('/music', 'PagesController@music');
Route::get('/photography', 'PagesController@photography');
Route::get('/sports', 'PagesController@sports');
Route::get('/terms', 'PagesController@terms');
Route::get('/topVideo', 'PagesController@topVideo');
