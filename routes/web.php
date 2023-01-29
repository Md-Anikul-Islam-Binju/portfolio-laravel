<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ExperienceController;
use App\Http\Controllers\admin\LanguagesController;
use App\Http\Controllers\admin\PersonalInformationController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\SocialLinkController;
use App\Http\Controllers\admin\ToolsController;
use App\Http\Controllers\admin\UserDetailsController;
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
    return view('index');
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
    Route::post('admin-skill-store',[SkillController::class,'store'])->name('admin.skill.store');
    Route::get('admin-skill-edit/{id}',[SkillController::class,'edit'])->name('admin.skill.edit');
    Route::post('admin-skill-update/{id}',[SkillController::class,'update'])->name('admin.skill.update');
    Route::delete('admin-skill-delete/{id}',[SkillController::class,'destroy'])->name('admin.skill.delete');

    //Experience
    Route::get('admin-experience',[ExperienceController::class,'index'])->name('admin.experience');
    Route::post('admin-experience-store',[ExperienceController::class,'store'])->name('admin.experience.store');

    //Project
    Route::get('admin-project',[ProjectController::class,'index'])->name('admin.project');
    Route::post('admin-project-store',[ProjectController::class,'store'])->name('admin.project.store');

    //Education
    Route::get('admin-education',[EducationController::class,'index'])->name('admin.education');
    Route::post('admin-education-store',[EducationController::class,'store'])->name('admin.education.store');
    //Tools
    Route::get('admin-tools',[ToolsController::class,'index'])->name('admin.tools');
    Route::post('admin-tools-store',[ToolsController::class,'store'])->name('admin.tools.store');

    //Certificate
    Route::get('admin-certificate',[CertificateController::class,'index'])->name('admin.certificate');
    Route::post('admin-certificate-store',[CertificateController::class,'store'])->name('admin.certificate.store');

    //User Details
    Route::get('admin-user-details/{id}',[UserDetailsController::class,'index'])->name('admin.user.details');
    Route::post('admin-user-details-update/{id}',[UserDetailsController::class,'update'])->name('admin.user.details.update');

    //Social Link
    Route::get('admin-social-link',[SocialLinkController::class,'index'])->name('admin.social.link');
    Route::post('admin-social-link-store',[SocialLinkController::class,'store'])->name('admin.social.link.store');

    //Personal Information
    Route::get('admin-personal-information',[PersonalInformationController::class,'index'])->name('admin.personal.information');
    Route::post('admin-personal-information-store',[PersonalInformationController::class,'store'])->name('admin.personal.information.store');

    //Languages
    Route::get('admin-languages',[LanguagesController::class,'index'])->name('admin.languages');
});
require __DIR__.'/auth.php';
