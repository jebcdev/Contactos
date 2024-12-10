<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('index'); 
})->name('index');



Route::get('/contacts',[ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create',[ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{contact}/show',[ContactController::class, 'show'])->name('contacts.show');

Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');

Route::get('/contacts/{contact}/edit',[ContactController::class, 'edit'])->name('contacts.edit');

Route::patch('/contacts/{contact}/update',[ContactController::class, 'update'])->name('contacts.update');

Route::delete('/contacts/{contact}/destroy',[ContactController::class, 'destroy'])->name('contacts.destroy');


require __DIR__ . '/auth.php';
