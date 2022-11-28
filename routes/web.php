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


Route::get('/', function () {return view('welcome');});

Route::get('test', function () { return '!'; }); 

Route::get('dir/test', function () { return '!!'; }); 





  Route::get('user/{id}/{name}', function ($id, $name) {
    return($name);
  })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


  Route::get('sum/{num1}/{num2}', function ($num1, $num2) {
    return($num1+$num2);
  })->where(['num1' => '[0-9]+', 'num' => '[0-9]+']);

  Route::get('user/show-{id}', function ($id) {
    return($id);
  })->where(['id' => '[0-9]+']);

  Route::get('user/{id?}', function ($id = 0) {
    return $id;
  })->where(['id' => '[0-9]+']);
Route::get('name/about', [App\Http\Controllers\TestController::class, 'show']);
Route::get('name/login', [App\Http\Controllers\Login2::class, 'show']);
Route::get('name/reg', [App\Http\Controllers\Reg1::class, 'show']);
Route::get('name/Katalog', [App\Http\Controllers\Katalog::class, 'show']);