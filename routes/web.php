<?php

use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
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

Route::get('/hello', function() {
    return view('hello', [
        'name' => 'Rizki Adi'
    ]);
});

Route::get('/world', function() {
    return view('hello.world', [
        'name' => 'riz.kiadi'
    ]);
});

Route::get('/html-encoding', function(HttpRequest $request){
    return view('html-encoding', [
        'name' => $request->input('name')
    ]);
});

Route::get('/disabled', function() {
    return view('disabled');
});

// Route::get('skill', function() {
//     return view('if-statement', [
//         'skills' => ['Coding', 'Riding']
//     ]);
// });
