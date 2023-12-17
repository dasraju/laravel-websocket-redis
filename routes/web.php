<?php

use Illuminate\Support\Facades;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $pipe = Redis::pipeline();

    Redis::set('name', 'f');

    // $results = $pipe->exec();

    // dd( Redis::get('name')) ;

    return view('welcome');
});
Route::get('get-realtime-response', function () {

    return view('realTimeResponse');
});
