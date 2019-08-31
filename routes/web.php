<?php
Route::group(['middleware'=>'auth'],function(){


Route::get('/home', 'HomeController@index')->name('home');

/*======================== Home Manipulation====================*/
Route::get('/showAddUser', 'admin\RegisterController@register')->name('addUser');
Route::get('/addUser', 'admin\RegisterController@save')->name('saveUser');
Route::get('/deleteUSer', 'admin\DeleteUserController@delete')->name('deleteUser');
Route::get('/doDelete', 'admin\DeleteUserController@doDelete')->name('doDelete');
Route::get('/doActivate', 'admin\viewController@doActivate')->name('doActivate');
Route::get('/viewUser', 'admin\viewController@view')->name('viewUser');
Route::get('/showUpdate', 'admin\updateUserController@showUpdate')->name('showUpdate');
Route::get('/showUpdateReady{email}', 'admin\updateUserController@showUpdateReady')->name('showUpdateReady');
Route::get('/saveUpdateReady', 'admin\updateUserController@saveUpdateReady')->name('saveUpdateReady');


/*======================Contact Message*/
Route::get('/showMessage', 'admin\messageController@showMessage')->name('showMessage');
Route::get('/showDeleteMessage', 'admin\messageController@showDeleteMessage')->name('showDeleteMessage');
Route::get('/deleteMessage', 'admin\messageController@deleteMessage')->name('deleteMessage');
Route::get('/showReplyMessage', 'admin\messageController@showReplyMessage')->name('showReplyMessage');
Route::get('/email', 'admin\messageController@email')->name('sendEmail');

Route::get('/showUReplyMessageReady{id}', 'admin\messageController@showReplyMessageReady')->name('showReplyMessageReady');

});

Auth::routes();
Route::get('/logout', 'auth\loginController@logout')->name('logout');

/*============Client Side Route*/
Route::get('/', 'user\clientHomeController@home')->name('/');
Route::get('/clientMessage', 'user\clientHomeController@message')->name('clientMessage');
/*====================Ende Of Client Side================*/

Route::get('/mailController', 'mailController@message')->name('clientMessage');
