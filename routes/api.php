<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'namespace' => 'Api'
], function () {

    Route::post('users/login', 'AuthController@login')->name('user.login');
    Route::post('users', 'AuthController@register')->name('user.register');

    Route::get('user', 'UserController@index')->name('user.index');
    Route::match(['put', 'patch'], 'user', 'UserController@update')->name('user.update');

    Route::get('profiles/{user}', 'ProfileController@show')->name('profiles.login');
    Route::post('profiles/{user}/follow', 'ProfileController@follow')->name('profiles.follow');
    Route::delete('profiles/{user}/follow', 'ProfileController@unFollow')->name('profiles.unFollow');

    Route::get('articles/feed', 'FeedController@index')->name('articles.feed.index');
    Route::post('articles/{article}/favorite', 'FavoriteController@add')->name('articles.favorite.add');
    Route::delete('articles/{article}/favorite', 'FavoriteController@remove')->name('articles.favorite.remove');

    Route::resource('articles', 'ArticleController', [
        'except' => [
            'create', 'edit'
        ]
    ]);

    Route::resource('articles/{article}/comments', 'CommentController', [
        'only' => [
            'index', 'store', 'destroy'
        ]
    ]);

    Route::get('tags', 'TagController@index')->name('tags.index');

});