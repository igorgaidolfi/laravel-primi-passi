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
    return view('home');
});

Route::get('/learn', function () {
    return view('learn');
});
Route::get('/teach', function () {
    return view('teach');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/stats', function () {
    return view('stats');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('about',function(){
    $data= [
        'home' => 'Panathinaikos',
        'away' => 'Olympiacos',
        'h_points' => rand(60,90),
        'a_points' => rand(60,90),
    ];
    return view('about',$data);
});
Route::get('/login', function () {
    return view('login');
});
