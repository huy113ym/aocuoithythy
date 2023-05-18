<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Static page
Route::get('/thong-tin', [StaticPageController::class, 'aboutPage'])->name('static.about');
Route::get('/chinh-sach-bao-mat', [StaticPageController::class, 'policyPage'])->name('static.policy');
Route::get('/dieu-khoan-dich-vu', [StaticPageController::class, 'privacyPage'])->name('static.privacy');
Route::get('/lien-he', [StaticPageController::class, 'contactPage'])->name('static.contact');

// Blogs
Route::prefix('/tin-tuc')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.list');
    Route::get('/{url}', [BlogController::class, 'singlePost']);
});
// Blogs
Route::prefix('/post')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('post.list');
    Route::get('/{url}', [PostController::class, 'singlePost']);
});

// Galleries
Route::prefix('/album-anh')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.list');
});

// Backend

Auth::routes();
Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=> 'authenticationAdmin'],function(){
        Route::get('/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
