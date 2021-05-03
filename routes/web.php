<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , \App\Http\Controllers\Welcome::class)->name('/');

Route::get('edit_compose' , \App\Http\Controllers\EditCompose::class)->name('edit_compose');

Route::get('offers' , \App\Http\Controllers\Offers::class)->name('offers');
Route::get('offers/{id}' , \App\Http\Controllers\sendoffers::class)->name('sendoffers');


Route::get('update_compose/{id}' , \App\Http\Controllers\UpdateCompose::class)->name('update_compose');
