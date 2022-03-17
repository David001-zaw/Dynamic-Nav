<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\MenuItemController;

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

Route::prefix('/admin')->group(function(){
    Route::get('/create', [MenuItemController::class, 'create'])->name('menu.create');
    Route::post('/store', [MenuItemController::class, 'store'])->name('menu.store');
    Route::get('/submenucreate', [SubMenuController::class, 'create'])->name('submenu.create');
    Route::post('/submenustore', [SubMenuController::class, 'store'])->name('submenu.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
