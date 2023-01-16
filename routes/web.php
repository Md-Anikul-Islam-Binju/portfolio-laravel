<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('admin-dashboard',[AdminController::class,'adminDashboard'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    //Admin Dashboard
    Route::get('admin-dashboard',[AdminController::class,'adminDashboard'])->name('admin.dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
require __DIR__.'/auth.php';
