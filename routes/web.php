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


Route::get('/', 'Frontend\HomeController@index')->name('landing');

Auth::routes();

Route::group(['as' => 'home.', 'prefix' => 'home', 'middleware' => ['auth', 'role:Admin|Volunteer']], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');

    /* --------------------------- User Profile Start --------------------------- */

    Route::get('/profile', 'Backend\ProfileController@edit')->name('profile');
    Route::put('/profile-update/{user}', 'Backend\ProfileController@update')->name('profile-update');
    Route::put('change-password/{user}', "Backend\ProfileController@changePassword")->name('change-password');

    /* ---------------------------- User Profile end ---------------------------- */

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

    Route::group(['as' => 'products.', 'prefix' => 'products'], function () {

        Route::get('/', "Backend\ProductController@index")->name('index');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::get('create', "Backend\ProductController@create")->name('create');
            Route::post('/', "Backend\ProductController@store")->name('store');
        });

        Route::get('/{product}', "Backend\ProductController@show")->name('show');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::get('edit/{product}', "Backend\ProductController@edit")->name('edit');
            Route::put('/{product}', "Backend\ProductController@update")->name('update');
            Route::delete('/{product}', "Backend\ProductController@destroy")->name('delete');
        });
    });

    Route::group(['as' => 'requests.', 'prefix' => 'requests'], function () {

        Route::get('/', "Backend\RequestController@index")->name('index');

        Route::get('create/{product}', "Backend\RequestController@create")->name('create');
        Route::post('store/{product}', "Backend\RequestController@store")->name('store');
        Route::get('/{productRequest}', "Backend\RequestController@show")->name('show');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::put('accept/{productRequest}', "Backend\RequestController@accept")->name('accept');
            Route::put('reject/{productRequest}', "Backend\RequestController@reject")->name('reject');
        });
    });

    Route::group(['as' => 'members.', 'prefix' => 'members'], function () {

        Route::get('/', "Backend\MemberController@index")->name('index');

        Route::get('/{user}', "Backend\MemberController@show")->name('show');

        Route::group(["middleware" => 'role:Admin'], function () {
            Route::put('accept/{user}', "Backend\MemberController@accept")->name('accept');
            Route::put('reject/{user}', "Backend\MemberController@reject")->name('reject');
        });
    });
});

/* -------------------------- Stripe Donation Start ------------------------- */

Route::group(['middleware' => ['role:Donor']], function () {
    Route::get('donate', 'StripePaymentController@donate')->name('home.donate');
    Route::post('stripe', 'StripePaymentController@stripePost')->name('home.stripe.post');
    Route::get('volunteer', function () {
        if (auth()->check() && !auth()->user()->hasRole('Volunteer')) {
            auth()->user()->update(['status' => 1]);
        }
        return back();
    })->name('volunteer');
});

    /* --------------------------- Stripe Donation End -------------------------- */