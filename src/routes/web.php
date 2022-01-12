<?php

use Illuminate\Support\Facades\Route;

// ログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// パスワードリセット
Route::get('password/update', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.update');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/update', 'Auth\ResetPasswordController@reset');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['middleware' => 'login_check'],function () {
    Route::get('/', 'Top\TopController@index')->name('top');;
    Route::get('/get_event/{eventId}', 'Top\TopController@sendData');
    Route::post('/send', 'Top\TopController@create');

    Route::group(['middleware' => 'is_admin_role'], function () {
        Route::get('/admin/add-user', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/admin/add-user', 'Auth\RegisterController@register');
        Route::get('/admin/add-event','Admin\AddEventController@index')->name('add_event');
        Route::post('/admin/add-event','Admin\AddEventController@add_event');
        Route::get('/admin/edit-event/{eventId}','Admin\EditEventController@edit')->name('event_edit');
        Route::get('/admin/delete-event/{eventId}','Admin\EditEventController@delete')->name('event_delete');
        Route::get('/admin/list-event','Admin\ListEventController@index')->name('list_event');
        Route::get('/admin/detail-event','Admin\DetailEventController@index')->name('detail_event');

        // 振り返り
        //振り返り管理者画面
        Route::get('review/admin','Review_admin\ReviewAdminController@index')->name('review_admin_top');
        Route::get('review/edit_day','Review_admin\ReviewAdminController@edit_day')->name('review_admin_edit_day');
        Route::get('review/edit_curriculum','Review_admin\ReviewAdminController@edit_curriculum')->name('review_admin_edit_curriculum');
        Route::get('review/studyprogress_search','Review_admin\ReviewAdminController@studyprogress_search')->name('review_studyProgress_search');
    });

});

//振り返りシート
//振り返りユーザー画面
Route::group(['prefix' => 'review/user'], function() {

    Route::get('/', 'Review_user\ReviewUserController@index')->name('review_user_top');

  });
Route::get('review/user', 'Review_user\ReviewUserController@index')->name('review_user_top');
