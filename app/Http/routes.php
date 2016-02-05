<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['prefix' => 'admin' , 'middleware'=> 'ip'],function()
{
    Route::get('salut',function(){
    return 'salut les gens ';
});
    
});


Route::get('salut',function(){
    return 'heyy foufa';
});



 Route::get('salut/{slug}-{id}',['as'=> 'salut' ,function($slug,$id){
   //return "Slug: $slug, ID: $id";
     return "Lien : ".route('salut',['slug'=>$slug,'id'=>$id]);
}])->where('slug','[a-z0-9\-]+')
  ->where('id','[0-9]+');
  

//dd($route);

Route::get('/salut/{name}', 'WelcomeController@index');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controller('welcome','WelcomeController');
Route::get('a-propos','PagesController@about');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
