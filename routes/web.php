<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
route::resource('/sample' , BlogController::class);
route::view('/', 'Home');

route::controller(BlogController::class)->group(function(){
    route::get('/blog' , 'index')->name('index');
    route::get('/blog/create', 'create')->name('create');
    route::post('/blog', 'store')->name('store');
    route::post('/update' , 'update')->name('update');
    route::delete('blog/{blog}' , 'destroy')->name('destroy');
    route::get('update/{id}' , 'edit');
    route::get('blog/view/{id}' , 'show');

});
