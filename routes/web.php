<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
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
    Route::post('upload', [App\Http\Controllers\HomeController::class, 'upload'])->name('upload');

});
