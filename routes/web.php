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
Route::prefix("builder-landingpage")->group(function () {
    Route::get('/', [config("lg.controllers")["page"], 'index'])->name('website.builder');
    Route::post('/create-page', [config("lg.controllers")["page"], 'store'])->name('new_page.store');
    Route::put('/update-page-content/{id}', [config("lg.controllers")["page"], 'updateContent'])->name('update.page_content');
    Route::put('/update-page/{id}', [config("lg.controllers")["page"], 'update'])->name('update.page');
    Route::get('/find-page/{id}', [config("lg.controllers")["page"], 'show'])->name('page.find');
    Route::get('/all-pages', [config("lg.controllers")["page"], 'allPages'])->name('page.all');
    Route::delete('/delete-page/{id}', [config("lg.controllers")["page"], 'destroy'])->name('page.delete');

    Route::get('get/custome-components', [config("lg.controllers")["block"], 'allBlocks'])->name('custome_component.all');
    Route::post('/store/custome-component', [config("lg.controllers")["block"], 'store'])->name('custome_component.store');
    Route::put('/store/custome-component/update/{id}', [config("lg.controllers")["block"], 'update'])->name('update.component');
    Route::delete('/store/custome-component/delete/{id}', [config("lg.controllers")["block"], 'destroy'])->name('component.delete');
});
