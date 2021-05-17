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
    return view('frontend.index');
});
// Route::get('/createmember', function () {
//     return view('backend.user.create');
// })->middleware('auth');

// Route::get('/create', 'UserController@create')->name('create')->middleware('auth');
// Route::post('/userstore', 'UserController@store');

// Route::get('/fl/{user}', 'UserController@show')->name('show.user');


// Route::post('/login', 'AuthController@LoginProcess');
// Route::get('login', 'AuthController@ShowLogin')->name('login');
// Route::get('/sign-in/github', 'AuthController@github');
// Route::get('/sign-in/github/redirect', 'AuthController@githubRedirect');
// Route::get('/sign-in/facebook', 'AuthController@facebook');
// Route::get('/sign-in/facebook/redirect', 'AuthController@facebookRedirect');

// Route::get('/logout', 'AuthController@logout')->name('log');
// Route::get('/edit/{id}', 'UserController@edit')->name('edit');



// Route::group(['prefix' => 'events', 'as' => 'events.', 'middleware' => 'auth'], function () {
//     Route::get('/', ['as' => 'index', 'uses' => 'EventController@index']);
//     Route::get('create', ['as' => 'create', 'uses' => 'EventController@create']);
//     Route::post('store', ['as' => 'store', 'uses' => 'EventController@store']);
//     Route::get('edit', ['as' => 'create', 'uses' => 'EventController@edit']);
//     Route::post('update', ['as' => 'update', 'uses' => 'EventController@update']);
//     Route::post('delete/{id}', ['as' => 'delete', 'uses' => 'EventController@destroy']);
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'home.', 'prefix' => 'home', 'middleware' => 'auth'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');
    Route::get('/profile', 'Backend\ProfileController@edit')->name('profile');
    Route::put('/profile', 'Backend\ProfileController@update')->name('profile');
    Route::put('change-password/{user}', "Backend\ProfileController@changePassword")->name('change-password');

    Route::group(['as' => 'users.', 'prefix' => 'users'], function () {

        Route::get('/', "Backend\UserController@index")->name('index');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::get('create', "Backend\UserController@create")->name('create');
            Route::post('/', "Backend\UserController@store")->name('store');
        });

        Route::get('/{user}', "Backend\UserController@show")->name('show');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::get('edit/{user}', "Backend\UserController@edit")->name('edit');
            Route::put('/{user}', "Backend\UserController@update")->name('update');
            Route::put('change-password/{user}', "Backend\UserController@changePassword")->name('change-password');
            Route::delete('/{user}', "Backend\UserController@destroy")->name('delete');
        });
    });

    Route::group(['as' => 'events.', 'prefix' => 'events'], function () {

        Route::get('/', "Backend\EventController@index")->name('index');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::get('create', "Backend\EventController@create")->name('create');
            Route::post('/', "Backend\EventController@store")->name('store');
        });

        Route::get('/{event}', "Backend\EventController@show")->name('show');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::get('edit/{event}', "Backend\EventController@edit")->name('edit');
            Route::put('/{event}', "Backend\EventController@update")->name('update');
            Route::delete('/{event}', "Backend\EventController@destroy")->name('delete');
        });
    });
});
