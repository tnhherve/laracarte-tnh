<?php


Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/test-mail',function(){
	return new MessageContactCreated('toto', 'tnhherve@gmmailcom','mkfmlkdqfm');
});


Route::get('/about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'ContactsController@create'
]);

Route::post('/contact', [
	'as' => 'contact',
	'uses' => 'ContactsController@store'
]);
