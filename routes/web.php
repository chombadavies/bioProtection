<?php

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
    Route::resource('pests',App\Http\Controllers\Backend\PestsController::class);
    Route::resource('bioproducts',App\Http\Controllers\Backend\BioProductsController::class);
    Route::any('/relationships',[App\Http\Controllers\Backend\BioProductsController::class, 'relationships'])->name('relationships');
    Route::any('/relationships/store',[App\Http\Controllers\Backend\BioProductsController::class, 'relationshipsStore'])->name('relationships.store');
  
});
// frontend routes
Route::any('/',[\App\Http\Controllers\Frontend\IndexController::class,'index'])->name('home');
Route::any('/bioproducts',[\App\Http\Controllers\Frontend\IndexController::class,'bioProducts'])->name('bioproducts');
Route::any('/bioproducts/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'bioProductDetails'])->name('bioproduct.details');
Route::any('/contact_us',[\App\Http\Controllers\Frontend\IndexController::class,'contactus'])->name('contact_us');
Route::any('/read_more',[\App\Http\Controllers\Frontend\IndexController::class,'readMore'])->name('read.more');
Route::any('/valuechain/cascadePests/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'cascadePests']);
Route::any('/bioproduct/searchCrops/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'searchCrops']);
Route::any('/bioproduct/searchPests/{id}',[\App\Http\Controllers\Frontend\IndexController::class,'searchPests']);
