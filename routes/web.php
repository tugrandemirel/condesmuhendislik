<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Front\IndexController;
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
Route::middleware('view.share')->group(function (){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/hakkimizda', [IndexController::class, 'about'])->name('about');
    Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}', [IndexController::class, 'blogDetail'])->name('blog.detail');
    Route::get('/hizmetlerimiz', [IndexController::class, 'service'])->name('service');
    Route::get('/hizmetlerimiz/{slug}', [IndexController::class, 'serviceDetail'])->name('service.detail');
    Route::get('/referanslarimiz/', [IndexController::class, 'reference'])->name('reference');
    Route::get('/iletisim', [IndexController::class, 'contact'])->name('contact');
    Route::post('/iletisim', [IndexController::class, 'contactStore'])->name('contact.store');
});


Auth::routes();
Route::prefix('admin')->as('admin.')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('site-ayarlari', SiteSettingController::class)
            ->parameter('site-ayarlari', 'site_setting')
            ->only(['index', 'store', 'update'])
            ->names('site_setting');
    Route::resource('seo-ayarlari', SeoController::class)
            ->parameter('seo-ayarlari', 'seo')
            ->except(['show', 'destroy'])
            ->names('seo');
    Route::resource('sosyal-medya-ayarlari', SocialMediaController::class)
            ->parameter('sosyal-medya-ayarlari', 'social_media')
            ->except(['show'])
            ->names('social_media');
    Route::resource('blog', BlogController::class)
            ->except(['show']);
    Route::resource('hizmetlerimiz', ServiceController::class)
        ->parameter('hizmetlerimiz', 'service')
        ->except(['show'])
        ->names('service');
    Route::resource('slider', SliderController::class)
        ->parameter('slider', 'slider')
        ->except(['show'])
        ->names('slider');
    Route::resource('mesajlar', ContactController::class)
        ->parameter('mesajlar', 'contact')
        ->only(['index', 'show'])
        ->names('contact');

    Route::resource("referanslar", ReferenceController::class)
        ->parameter("referanslar", "references")
//        ->except(['show'])
        ->names('references');
    Route::post('upload', [App\Http\Controllers\HomeController::class, 'upload'])->name('upload');

});
