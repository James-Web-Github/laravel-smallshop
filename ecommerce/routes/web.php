<?php

use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Psr7\Request;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\FileIterator\Facade;
// use Session;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    // session()->forget('user');
    return redirect('login');
});
Route::get('detail/logout', function () {
    Session::forget('user');
    // session()->forget('user');
    return redirect('login');
});
Route::post('/login', [Usercontroller::class, 'login']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::get('/search', [ProductController::class, 'search']);
Route::post('add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/cartlist', [ProductController::class, 'cartList']);
Route::get('/removecart/{id}', [ProductController::class, 'removeCart']);
