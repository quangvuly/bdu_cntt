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

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Client')->group(function () {
    Route::get('/','HomeController@index')->name('client.page_home');
    Route::get('list/{id}','NewsController@get_detailCate')->name('client.page_news.list');
    Route::get('detail/{id}','NewsController@get_detailNews')->name('client.page_news.detail');
    Route::get('slider/{id}','NewsController@get_detailSlider')->name('client.page_slider.detail');
    Route::get('major/{id}','NewsController@get_detailMajor')->name('client.page_major.detail');
});

Route::get('admin/login','Authen\LoginController@getLogin')->name('admin.login.show')->middleware('mdCheckLogin');
Route::post('admin/login','Authen\LoginController@logInProcess')->name('admin.login.process')->middleware('mdCheckLogin');
Route::get('admin/logout','Authen\LoginController@logOutProcess')->name('admin.logout.process');

Route::prefix('admin')->middleware('mdProcessLogin')->namespace('Admin')->group(function () {

    Route::get('/','DashboardController@index')->name('admin.dashboard');

    Route::prefix('cate')->group(function () {
        Route::get('/','CateController@index')->name('admin.cate.list');

        route::middleware('mdProcessUser')->group(function () {
            Route::get('add','CateController@create')->name('admin.cate.create');
            Route::post('add','CateController@store')->name('admin.cate.store');
            Route::get('edit/{id}','CateController@edit')->name('admin.cate.edit');
            Route::post('edit/{id}','CateController@update')->name('admin.cate.update');
            Route::get('delete/{id}','CateController@destroy')->name('admin.cate.destroy');
        });

    });

    Route::prefix('user')->group(function () {
        Route::get('/','UserController@index')->name('admin.user.list');

        route::middleware('mdProcessUser')->group(function () {
            Route::get('add','UserController@create')->name('admin.user.create');
            Route::post('add','UserController@store')->name('admin.user.store');
            Route::get('edit/{id}','UserController@edit')->name('admin.user.edit');
            Route::post('edit/{id}','UserController@update')->name('admin.user.update');
            Route::get('delete/{id}','UserController@destroy')->name('admin.user.destroy');
        });
    });

    Route::prefix('news')->group(function () {
        Route::get('/','NewsController@index')->name('admin.news.list');

        route::middleware('mdProcessUser')->group(function () {
            Route::get('add','NewsController@create')->name('admin.news.create');
            Route::post('add','NewsController@store')->name('admin.news.store');
            Route::get('edit/{id}','NewsController@edit')->name('admin.news.edit');
            Route::post('edit/{id}','NewsController@update')->name('admin.news.update');
            Route::get('delete/{id}','NewsController@destroy')->name('admin.news.destroy');
        });
    });

    Route::prefix('contact')->middleware('mdProcessUser')->group(function () {
        Route::get('/','ContactController@index')->name('admin.contact.list');
        Route::get('add','ContactController@create')->name('admin.contact.create');
        Route::post('add','ContactController@store')->name('admin.contact.store');
        Route::get('edit/{id}','ContactController@edit')->name('admin.contact.edit');
        Route::post('edit/{id}','ContactController@update')->name('admin.contact.update');
        Route::get('delete/{id}','ContactController@destroy')->name('admin.contact.destroy');
    });

    Route::prefix('slide')->middleware('mdProcessUser')->group(function () {
        Route::get('/','SliderController@index')->name('admin.slider.list');
        // Route::get('add','SliderController@create')->name('admin.slider.create');
        // Route::post('add','SliderController@store')->name('admin.slider.store');
        Route::get('edit/{id}','SliderController@edit')->name('admin.slider.edit');
        Route::post('edit/{id}','SliderController@update')->name('admin.slider.update');
        // Route::get('delete/{id}','SliderController@destroy')->name('admin.slider.destroy');
    });

    Route::prefix('lecturer')->middleware('mdProcessUser')->group(function () {
        Route::get('/','LecturerController@index')->name('admin.lecturer.list');
        Route::get('add','LecturerController@create')->name('admin.lecturer.create');
        Route::post('add','LecturerController@store')->name('admin.lecturer.store');
        Route::get('edit/{id}','LecturerController@edit')->name('admin.lecturer.edit');
        Route::post('edit/{id}','LecturerController@update')->name('admin.lecturer.update');
        Route::get('delete/{id}','LecturerController@destroy')->name('admin.lecturer.destroy');
    });

    Route::prefix('major')->middleware('mdProcessUser')->group(function () {
        Route::get('/','MajorController@index')->name('admin.major.list');
        // Route::get('add','MajorController@create')->name('admin.lecturer.create');
        // Route::post('add','MajorController@store')->name('admin.lecturer.store');
        Route::get('edit/{id}','MajorController@edit')->name('admin.major.edit');
        Route::post('edit/{id}','MajorController@update')->name('admin.major.update');
        // Route::get('delete/{id}','MajorController@destroy')->name('admin.lecturer.destroy');
    });

    Route::prefix('cooperate')->middleware('mdProcessUser')->group(function () {
        Route::get('/','CooperateController@index')->name('admin.cooperate.list');
        Route::get('add','CooperateController@create')->name('admin.cooperate.create');
        Route::post('add','CooperateController@store')->name('admin.cooperate.store');
        Route::get('edit/{id}','CooperateController@edit')->name('admin.cooperate.edit');
        Route::post('edit/{id}','CooperateController@update')->name('admin.cooperate.update');
        Route::get('delete/{id}','CooperateController@destroy')->name('admin.cooperate.destroy');
    });

    Route::prefix('info')->middleware('mdProcessUser')->group(function () {
        // Route::get('/','CooperateController@index')->name('admin.cooperate.list');
        // Route::get('add','CooperateController@create')->name('admin.cooperate.create');
        // Route::post('add','CooperateController@store')->name('admin.cooperate.store');
        Route::get('edit/{id}','InfoController@edit')->name('admin.info.edit');
        Route::post('edit/{id}','InfoController@update')->name('admin.info.update');
        // Route::get('delete/{id}','CooperateController@destroy')->name('admin.cooperate.destroy');
    });

    Route::prefix('communicate')->middleware('mdProcessUser')->group(function () {
        Route::get('/','CommunicateController@index')->name('admin.comm.list');
        Route::get('add','CommunicateController@create')->name('admin.comm.create');
        Route::post('add','CommunicateController@store')->name('admin.comm.store');
        Route::get('edit/{id}','CommunicateController@edit')->name('admin.comm.edit');
        Route::post('edit/{id}','CommunicateController@update')->name('admin.comm.update');
        Route::get('delete/{id}','CommunicateController@destroy')->name('admin.comm.destroy');
    });
});


