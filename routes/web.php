<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\LazyCollection;


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
/*

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/search', [ProductController::class, 'index']);
Route::post('/search_ajax',[AjaxController::class, 'index']);


Route::group(['middleware' => 'admin','prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
});

Route::get('/registration', [RegisterController::class, 'index'])->name('registration.index');
Route::post('/registration', [RegisterController::class, 'save'])->name('registration.save');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/search', [SearchController::class, 'index'])->name('search');


Route::get('/test', function (){
    try {
        echo 'hello';
    }catch (Throwable $e){
        echo $e->getMessage();
    }
});

