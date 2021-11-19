<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Info2Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api',[Info2Controller::class,'create']);
Route::get('/index',[Info2Controller::class,'posts']);
Route::get('/posts',function(){
    return view('posts.postVista');
});


Route::get('/home', 'HomeController@index')->name('home');
