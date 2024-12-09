<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('index'); 
})->name('index');



Route::get('/contacts',[ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create',[ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/{id}/show',[ContactController::class, 'show'])->name('contacts.show');

Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');


require __DIR__ . '/auth.php';
