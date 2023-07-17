<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SeoFeatureController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserFileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/services', [HomeController::class, 'service']);
Route::get('/service/details', [HomeController::class, 'serviceDetails']);
Route::get('/projects', [HomeController::class, 'project']);
Route::get('/project/details', [HomeController::class, 'projectDetails']);
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('terms-condition');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('login', function () {
    return auth()->user() ? redirect('admin/dashboard') : redirect('login');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('users/profile/{user}', [UserController::class, 'profileEdit'])->name('users.profile');
    Route::post('users/profile/{user}/update', [UserController::class, 'profileUpdate'])->name('users.profile.update');
    Route::post('users/{user}/change-password', [UserController::class, 'changePassword'])->name('users.change-password');

    Route::get('users/{user}/delete/', [UserController::class, 'delete'])->middleware('admin');
    Route::resource('users', UserController::class)->middleware('admin');

    Route::get('projects/{project}/delete/', [ProjectController::class, 'delete'])->middleware('admin');
    Route::resource('projects', ProjectController::class)->middleware('admin');

    Route::get('seo-features/{seo_feature}/delete/', [SeoFeatureController::class, 'delete'])->middleware('admin');
    Route::resource('seo-features', SeoFeatureController::class)->middleware('admin');

    Route::get('files', [UserFileController::class, 'index'])->name('files.index');
    Route::get('files/{file}/delete/', [UserFileController::class, 'delete'])->middleware('admin');
    Route::get('files/create', [UserFileController::class, 'create'])->name('files.create')->middleware('admin');
    Route::post('files', [UserFileController::class, 'store'])->name('files.store')->middleware('admin');
    Route::get('files/{file}/edit', [UserFileController::class, 'edit'])->name('files.edit')->middleware('admin');
    Route::get('files/{file}', [UserFileController::class, 'show'])->name('files.show');
    Route::patch('files/{file}', [UserFileController::class, 'update'])->name('files.update')->middleware('admin');
});
