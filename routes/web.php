<?php

Route::get('/', function () {
    return view('home.index');
})->middleware('auth');

Route::get('/home', function () {
    return view('home.index');
})->middleware('auth');


//Auth
Route::get('/login','AuthController@getLogin');


Route::post('/login','AuthController@postLogin');
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Chat Private

Route::get('/chat/private','ChatPrivateController@getView')->name('chat.private')->middleware('auth');
Route::get('/chat/group','ChatGroupController@getView')->name('chat.group')->middleware('auth');


// Chat Group

Route::post('/chat/group/add','ChatGroupController@store')->middleware('auth');

Route::get('/chat/group/api','ChatGroupController@ajax')->middleware('auth');


// shopify

Route::get('shopify/api/article/get','ShopifyArticleApiController@index');


// Content Writer side 
Route::get('/feed/content-writer','ContentWriterController@index');


// partials chat
