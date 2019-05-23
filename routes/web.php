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


Route::get('/show', 'HomeController@show');

Route::get('onama', function () {
    return view('onama');
});
Route::get('kontakt', function () {
    return view('kontakt');
});
Route::get('cenovnik', function () {
    return view('cenovnik');
});

Route::get('/post/{id}/{name}', function ($id, $name){
    return 'This is post '.$id ." " . $name;
});

Route::get('/admin/ja/primer/broj1',array('as'=>'admin' , function (){
    $url = route('admin');

    return $url;
}));

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController');


Route::group(['middleware'=>['auth']], function(){
    Route::resource('admin', 'AdminController');
    Route::resource('blogs', 'BlogController');
});

Route::get('contact', 'MailController@contact');
Route::post('contact/send', 'MailController@send');