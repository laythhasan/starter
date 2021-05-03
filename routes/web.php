<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/layth', function () {
    return "welcome";
});



// (Routes paramiters) //

// يجب ان ارسل باراميتر 
Route::get('/layth1/{id}', function ($id) {
    return  $id;
})->name('a');

// يكزن مخير ان يرسل او لا 
Route::get('/layth2/{id?}', function () {
    return "welcome";
})->name('b');

// Route::get('/first','Front\Firstcontroller@showstring');

Route::group(['namespace' => 'Front' ],function(){
    Route::get('first','Firstcontroller@showstring');
});