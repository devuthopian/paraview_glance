<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::post('/get/states', 'FrontendController@getStates')->name('get.states');
Route::post('/get/cities', 'FrontendController@getCities')->name('get.cities');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User ParaviewglanceController
         */
        Route::get('paraview_glance', 'ParaviewglanceController@index')->name('paraview_glance');
        Route::get('fetchLogo', 'ParaviewglanceController@fetchLogo')->name('fetchLogo');
        //Route::get('s3aws', 'ParaviewglanceController@s3_bucket')->name('s3aws');

         /*
         * 
         */
        Route::get('getGlanceImages', 'ParaviewglanceController@getGlanceImages')->name('getGlanceImages');
        Route::post('s3bucket', 'ParaviewglanceController@s3_bucket')->name('s3bucket');


        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        /*
         * User Profile Picture
         */
        Route::patch('profile-picture/update', 'ProfileController@updateProfilePicture')->name('profile-picture.update');
    });
});

/*
* Show pages
*/
Route::get('pages/{slug}', 'FrontendController@showPage')->name('pages.show');
