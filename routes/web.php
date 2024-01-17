<?php

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

// Auth::routes(['register' => false]);

Auth::routes();


Route::group(['prefix'=>'admin','middleware' => ['auth']],function(){
    Route::any('/',[App\Http\Controllers\Backend\AdminController::class, 'admin'])->name('admin');
    Route::resource('languages',App\Http\Controllers\Backend\LanguagesController::class);
    Route::resource('valuechains',App\Http\Controllers\Backend\ValuechainsController::class);
    Route::any('fetch_valuechains',[App\Http\Controllers\Backend\ValuechainsController::class,'fetchValuechains'])->name('fetch.valuechains');
    Route::resource('pests',App\Http\Controllers\Backend\PestsController::class);
    Route::any('fetch_pests',[App\Http\Controllers\Backend\PestsController::class,'fetchPests'])->name('fetch.pests');
    Route::resource('news',App\Http\Controllers\Backend\NewsController::class);
    Route::any('/fetch_news',[App\Http\Controllers\Backend\NewsController::class, 'fetchNews'])->name('fetch.news');
    Route::resource('bioproducts',App\Http\Controllers\Backend\BioProductsController::class);
    Route::any('fetch_bioproducts',[App\Http\Controllers\Backend\BioProductsController::class,'fetchBioproducts'])->name('fetch.bioproducts');
    Route::any('/relationships',[App\Http\Controllers\Backend\BioProductsController::class, 'relationships'])->name('relationships');
    Route::any('/relationships/store',[App\Http\Controllers\Backend\BioProductsController::class, 'relationshipsStore'])->name('relationships.store');
    Route::resource('resources',\App\Http\Controllers\Backend\ResourcesController::class);
    Route::any('fetch_resources',[App\Http\Controllers\Backend\ResourcesController::class,'fetchResources'])->name('fetch.resources');
    Route::resource('themes',\App\Http\Controllers\Backend\ThemesController::class);
    Route::any('fetch_themes',[App\Http\Controllers\Backend\ThemesController::class,'fetchThemes'])->name('fetch.themes');
    Route::resource('newscategories',\App\Http\Controllers\Backend\NewsCategoryController::class);
});
// frontend routes
Route::any('/',[\App\Http\Controllers\Frontend\IndexController::class,'index'])->name('home');
Route::any('/bioproducts',[\App\Http\Controllers\Frontend\IndexController::class,'bioProducts'])->name('bioproducts');
Route::any('/bioproducts/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'bioProductDetails'])->name('bioproduct.details');
Route::any('/contact_us',[\App\Http\Controllers\Frontend\IndexController::class,'contactUs'])->name('contactus');
Route::any('/resources',[\App\Http\Controllers\Frontend\IndexController::class,'Themes'])->name('themes');
Route::any('/read_more',[\App\Http\Controllers\Frontend\IndexController::class,'readMore'])->name('read.more');
Route::any('/valuechain/cascadePests/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'cascadePests']);
Route::any('/bioproduct/searchCrops/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'searchCrops']);
Route::any('/bioproduct/searchPests/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'searchPests']);
Route::any('/news',[\App\Http\Controllers\Frontend\IndexController::class,'news'])->name('news');
Route::get('/get-news-by-category', [\App\Http\Controllers\Frontend\IndexController::class,'getNewsByCategory'])->name('getNewsByCategory');
Route::get('/get-default-news', [\App\Http\Controllers\Frontend\IndexController::class,'getDefaultNews'])->name('getDefaultNews');
Route::any('/resource_details/{id}',[App\Http\Controllers\Frontend\IndexController::class,'resourceDetails'])->name('resource.details');
Route::any('/browseby_theme/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'browsebyTheme'])->name('browseby.theme');
Route::any('/news_details/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'newsDetails'])->name('news.details');
Route::any('/contacts_process',[App\Http\Controllers\Frontend\IndexController::class,'contactProcess'])->name('contact.process');
