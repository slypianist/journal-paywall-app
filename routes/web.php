<?php

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReadersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\PodcastController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/categories', [HomeController::class, 'showCategories'])
    ->name('show-categories');

Route::get('/about', function () {

    return view('pages.about');
})->name('about');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/random-post', [PostController::class, 'randomArticle']);

// Readers Routes


Route::get('user/login', function(){
    return view('news.register');
});

Route::get('user/profile/view', function(){
    return view('');
});


/* Podcast Routes======================================= */

//Route::get('podcasts/{podcast}', [PodcastController::class, 'show'])->name('podcasts.show');
Route::post('podcast', [PodcastController::class, 'store'])->name('podcast.store');
Route::get('podcast/{podcast}/edit', [PodcastController::class, 'edit'])->name('podcast.edit');
Route::patch('podcast/{podcast}', [PodcastController::class, 'update'])->name('podcast.update');
Route::delete('podcast/{podcast}', [PodcastController::class, 'destroy'])->name('podcast.destroy');

// Podcast Episodes

Route::get('/podcasts/{podcast}/episodes/create', [EpisodeController::class, 'create'])->name('episodes.create');
Route::post('/podcasts/{podcast}/episodes', [EpisodeController::class, 'store'])->name('episodes.store');
Route::get('/podcasts/{podcast}/episodes/{episode}', [EpisodeController::class, 'show'])->name('episodes.show');
Route::get('/podcasts/{podcast}/episodes/{episode}/edit', [EpisodeController::class, 'edit'])->name('episodes.edit');
Route::put('/podcasts/{podcast}/episodes/{episode}', [EpisodeController::class, 'update'])->name('episodes.update');
Route::delete('/podcasts/{podcast}/episodes/{episode}', [EpisodeController::class, 'destroy'])->name('episodes.destroy');

/* End of Podcast routes ========================================*/


Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout']);
});

Route::post('user/register', [ReadersController::class, 'register'])->name('reader.register');
Route::post('user/login', [ReadersController::class, 'login'])->name('reader.login');
Route::post('user/logout', [ReaderController::class, 'logout'])->name('reader.logout');
Route::get('user/dashboard', [ReadersController::class, 'dashboard'])->name('reader.dashboard');
Route::post('user/profile', [ReaderController::class, 'createProfile'])->name('readerprofile.create');
Route::patch('user/profile/update', [ReaderController::class, 'updateProfile'])->name('readerprofile.update');

Route::middleware('auth')->group(function(){
    Route::get('test', [TestController::class, 'index']);
    Route::get('/podcasts/create', [PodcastController::class, 'create'])->name('podcasts.create');
    Route::get('podcasts', [PodcastController::class, 'index'])->name('podcasts.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('posts/checkSlug', [PostController::class, 'checkSlug'])
        ->name('checkSlug');
    Route::get('posts/authorpost/{id}', [PostController::class, 'authorPost'])
        ->name('authorPost');
    Route::resource('posts', PostController::class);
Route::post('upload-img', [PostController::class, 'fileUpload'])->name('post.fileupload');
    Route::resource('admin-categories', CategoryController::class);

    Route::get('categories/checkCategorySlug', [CategoryController::class, 'checkCategorySlug'])
        ->name('checkCategorySlug');
        Route::get('podcasts/checkPodcastSlug', [PodcastController::class, 'checkPodcastSlug'])
        ->name('checkPodcastSlug');
    Route::resource('general-settings', GeneralSettingController::class);

    Route::get('manage-sub', [])->name('manage.sub');

    Route::resource('authors', AuthorController::class);
});

require __DIR__ . '/auth.php';

Route::get('news/{post:slug}', [PostController::class, 'show'])->name('post.list');

