<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\ToolsController;
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
    Route::get('admin-logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

    //Skill
    Route::get('admin-skill',[SkillController::class,'index'])->name('admin.skill');

    //Experience
    Route::get('admin-experience',[ExperienceController::class,'index'])->name('admin.experience');

    //Project
    Route::get('admin-project',[ProjectController::class,'index'])->name('admin.project');

    //Education
    Route::get('admin-education',[EducationController::class,'index'])->name('admin.education');

    //Tools
    Route::get('admin-tools',[ToolsController::class,'index'])->name('admin.tools');

    //Certificate
    Route::get('admin-certificate',[CertificateController::class,'index'])->name('admin.certificate');
});
require __DIR__.'/auth.php';
